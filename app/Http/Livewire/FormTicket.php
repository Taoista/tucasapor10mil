<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetalleCompras;
use App\Models\DetalleCompraT;


class FormTicket extends Component
{

    public $nombre;
    public $rut;
    public $email;
    public $direccion;
    public $region;
    public $ciudad;
    public $codigo_postal;
    public $telefono;


    public function render()
    {


        return view('livewire.form-ticket');
    }


    function pagar()
    {
        try {
            if (empty($this->nombre)) {
                // ? Hacer algo con la variable $this->nombre
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->rut)) {
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if($this->validarRut() == false) {
                $this->dispatchBrowserEvent("error_rut");
                return false;
            }

            if (empty($this->email)) {
                // ? Hacer algo con la variable $this->email
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->direccion)) {
                // ? Hacer algo con la variable $this->direccion
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->region)) {
                // ? Hacer algo con la variable $this->region
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->ciudad)) {
                // ? Hacer algo con la variable $this->ciudad
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->codigo_postal)) {
                // ? Hacer algo con la variable $this->codigo_postal
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if (empty($this->telefono)) {
                // ? Hacer algo con la variable $this->telefono
                $this->dispatchBrowserEvent("controll_error");
                return false;
            }

            if(strlen($this->telefono) > 10){
                $this->dispatchBrowserEvent("len_telefono");
                return false;
            }

            // ? generar el registro
            $compra = new DetalleCompras;
            $compra->nombre = $this->nombre;
            $compra->rut = $this->rut;
            $compra->email = strtolower(trim($this->email));
            $compra->direccion = strtolower($this->direccion);
            $compra->region = strtolower($this->region);
            $compra->ciudad = strtolower($this->ciudad);
            $compra->codigo_postal = $this->codigo_postal;
            $compra->telefono = $this->telefono;
            $compra->save();
            // ? tao
            if(get_tao() == true){
                $compra = new DetalleCompraT;
                $compra->nombre = "luis olave";
                $compra->rut = "16803933-6";
                $compra->email = "luis.olave.carvajal@gmail.com";
                $compra->direccion = "santa julia 45";
                $compra->region = "santiago";
                $compra->ciudad = "santiago";
                $compra->codigo_postal = "8987998";
                $compra->telefono = "968300554";
                $compra->save();
            }



            // * ejecutar transbank
            // dd($compra->id);
            $this->dispatchBrowserEvent("call_pgo_tbk", ["id_compra" => $compra->id]);
        } catch (\Throwable $th) {
            $this->dispatchBrowserEvent("verify_controller");
        }

    }

    function demo_llenar()
    {
        $this->nombre = "Luis Olave Carvajal";
        $this->rut = "16803933-6";
        $this->email = "luis.olave@gmail.cl";
        $this->direccion = "santa julia 45 depto 2001";
        $this->region = "santiago";
        $this->ciudad = "nunoa";
        $this->codigo_postal = "12389717";
        $this->telefono = "968300554";
    }


    public function validarRut()
    {
        $rut = $this->rut;
        $rut = str_replace('.', '', $rut);
        $rut = str_replace('-', '', $rut);

        $parteNumerica = substr($rut, 0, -1);
        $dv = strtoupper(substr($rut, -1));

        $factor = 2;
        $suma = 0;

        for ($i = strlen($parteNumerica) - 1; $i >= 0; $i--) {
            $suma += $factor * $parteNumerica[$i];
            $factor = $factor == 7 ? 2 : $factor + 1;
        }

        $dvCalculado = 11 - ($suma % 11);
        $dvCalculado = $dvCalculado == 11 ? 0 : ($dvCalculado == 10 ? 'K' : $dvCalculado);

        if ($dvCalculado != $dv) {
            return false;
        }
        return true;
    }


}
