<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ConsultaMailable;
use Illuminate\Support\Facades\Mail;
use App\Models\Configuracion;

class ConsultaIndex extends Component
{

    public $name;
    public $email;
    public $msg;

    public function mount()
    {
        // dd("hola");
    }

    public function render()
    {
        return view('livewire.consulta-index');
    }

    function send_question()
    {
        $name = $this->name;
        $email = strtolower(trim($this->email));
        $msg = $this->msg;

        if($name == "" OR $email == ""){
            $this->dispatchBrowserEvent("send_error");
            return false;
        }
        $email_admin = Configuracion::select("dato")->where("detalle", "email-contact")->get();

        $contact = new ConsultaMailable($email, $name, $msg);
        Mail::to($email_admin->first()->dato)->send($contact);

        $this->name = "";
        $this->email = "";
        $this->msg = "";
        $this->dispatchBrowserEvent("send_query");

    }

}
