<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\QrController;
use App\Models\DetalleCompras;
use App\Models\Transbank;


class IndexController extends Controller
{

    // * start page
    function index()
    {
        return view("index");
    }


    // * secction questions
    function preguntas()
    {
        return view("preguntas");
    }


    // * get documents


    // * contact section
    function contacto()
    {
        return view("contacto");
    }

    // * seccion de compra de ticket
    function compra_ticket()
    {
        return view("compra-ticket");
    }

    // * resultado pago error
    function pgo_result()
    {
        return view("pgo-error");
    }

    // * pago correcto
    function pgo_tbk($uuid)
    {

        // * url de test
        // http://127.0.0.1:8000/pgo-tbk/89079769-2f11-422a-836a-98e81e91e1e1
        $qrObject = new QrController($uuid);

        $detalle = Transbank::select("transbank.id", "transbank.fecha", "transbank.id_detalle_compra AS id_compra",
                                    "transbank.authorizationCode", "tt.name AS tipo_tarjeta", "transbank.installmentsNumber AS cuotas",
                                    "transbank.installmentsAmount AS p_cuotas", "transbank.cardNumber AS n_tarjeta", "transbank.total")
                    ->join("tipo_tarjeta AS tt", "tt.cod", "transbank.paymentTypeCode")
                    ->where("transbank.uuid", $uuid)->get()->first();

        // dd($detalle);

        $qr = $qrObject->generate_qr();

        return view("pgo-tbk", compact('uuid','qr', 'detalle'));
    }

}
