<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Configuracion;
use App\Models\Transbank;
// use App\Models\TransbankT;
use App\Models\DetalleCompras;
use App\Models\QrDetalle;
use Transbank\Webpay\WebpayPlus;
use Transbank\Webpay\WebpayPlus\Transaction;
use Illuminate\Support\Str;
use App\Http\Controllers\QrController;
use App\Mail\ComprobantePagoMailable;
use Illuminate\Support\Facades\Mail;


class TransbankController extends Controller
{

    function __construct()
    {

        $data = Configuracion::where("detalle", "production")->get();

        if($data->first()->dato == 1){
            $tbk_cc = Configuracion::where("detalle", "tbk-cc")->get()->first()->dato;
            $tbk_api = Configuracion::where("detalle", "tbk-api-key")->get()->first()->dato;

            WebpayPlus::configureForProduction($tbk_cc, $tbk_api);

        }else{
            WebpayPlus::configureForTesting();
        }

    }

    function create_sessions()
    {

    }

    function iniciar_compra(Request $request)
    {
        $id_compra = $request->id_compra;

        $compra = new Transbank;
        $compra->uuid = Str::uuid();
        $compra->id_detalle_compra = $id_compra;
        $compra->seccion_id = session()->getId();
        $compra->total = 10000;
        $compra->save();

        // if(get_tao() == true){
        //     $tao = new TransbankT;
        //     $tao->uuid = Str::uuid();
        //     $tao->id_detalle_tao = $id_compra;
        //     $tao->seccion_id = session()->getId();
        //     $tao->total = 10000;
        //     $tao->save();
        // }


        return $this->start_web_pay_plus($compra);
    }


    function start_web_pay_plus($transbank)
    {
        $transacion = (new Transaction)->create(
            $transbank->id,
            $transbank->seccion_id,
            $transbank->total,
            url('/').'/api/confirmar_pago'
        );

        $url = $transacion->getUrl()."?token_ws=".$transacion->getToken();
        return $url;
    }

    function confirmar_pago(Request $request)
    {
        try {
            $confirmacion = (new Transaction)->commit($request->get("token_ws"));
            if($confirmacion->isApproved()){
                $id_order = $confirmacion->buyOrder;

                Transbank::where("id_detalle_compra", $id_order)->update([
                    "estado" => 1,
                    "responseCode" => $confirmacion->responseCode,
                    "authorizationCode" => $confirmacion->authorizationCode,
                    "paymentTypeCode" => $confirmacion->paymentTypeCode,
                    "installmentsNumber" => $confirmacion->installmentsNumber,
                    "installmentsAmount" => $confirmacion->installmentsAmount == null ? 0 : $confirmacion->installmentsAmount,
                    "cardNumber" => $confirmacion->cardNumber,
                ]);

                $data = Transbank::select("id", "uuid")->where("id_detalle_compra", $id_order)->get()->first();

                DetalleCompras::where("id", $id_order)->update([
                        'estado' => 1,
                        "id_tbk" => $data->id
                ]);


                $qrDetalle = new QrDetalle;
                $qrDetalle->seccion_id = $data->uuid;
                $qrDetalle->id_detalle_compra =  $id_order;
                $qrDetalle->save();


                $qrObject = new QrController($data->uuid);
                $qr = $qrObject->generate_qr();

                $email_admin = Configuracion::select("dato")->where("detalle", "email-contact")->get();

                // ? envio email al admin
                $correo = new ComprobantePagoMailable($qr, $data->uuid);
                Mail::to($email_admin->first()->dato)->send($correo);
                // ? envio correo al cliente
                $email_cliente = DetalleCompras::where("id", $id_order)->get()->first()->email;
                $correo = new ComprobantePagoMailable($qr, $data->uuid);
                // ? envio correo al tao y configuracion del tao



                Mail::to($email_cliente)->send($correo);
                return redirect("./pgo-tbk".'/'.$data->uuid);

            }else{
                return redirect("./pgo-result");
            }
        } catch (\Throwable $th) {
            return redirect("./pgo-result");
        }
    }


}

 //  tarjeta de debit aprobadad
    // 4051884239937763
// tarjeta de creidto
//     4051885600446623
// CVV 123

// {
//     "vci": "TSY",
//     "status": "AUTHORIZED",
//     "responseCode": 0,
//     "amount": 683905,
//     "authorizationCode": 1415,
//     "paymentTypeCode": "VD",
//     "accountingDate": "0227",
//     "installmentsNumber": 0, -> ctas
//     "installmentsAmount": null, -> cantidad cuotas
//     "sessionId": "PDtEybXDK9qR94UAHKHW7TTREvrX2YBwf1PAZBxj",
//     "buyOrder": 24,
//     "cardNumber": 7763,
//     "cardDetail": {
//       "card_number": 7763
//     },
//     "transactionDate": "2023-02-27T07:20:41.126Z",
//     "balance": null
//   }

