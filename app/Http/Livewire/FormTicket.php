<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\DetalleCompras;


class FormTicket extends Component
{

    public $nombre;
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

        // $this->dispatchBrowserEvent("loading");

        if (empty($this->nombre)) {
            // ? Hacer algo con la variable $this->nombre
            // dd('aki');
            $this->dispatchBrowserEvent("controll_error");
            return false;
        }

        if (empty($this->email)) {
            // ? Hacer algo con la variable $this->email
            dd('aki');

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

        // ? generar el registro
        $compra = new DetalleCompras;
        $compra->nombre = $this->nombre;
        $compra->email = strtolower(trim($this->email));
        $compra->direccion = strtolower($this->direccion);
        $compra->ciudad = strtolower($this->ciudad);
        $compra->codigo_postal = $this->codigo_postal;
        $compra->telefono = $this->telefono;
        $compra->save();
        // * ejecutar transbank
        // dd($compra->id);
        $this->dispatchBrowserEvent("call_pgo_tbk", ["id_compra" => $compra->id]);
    }

}
