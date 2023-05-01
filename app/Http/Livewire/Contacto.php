<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Mail;

class Contacto extends Component
{

    public $name;
    public $email;
    public $asunto;
    public $msg;

    public function render()
    {
        return view('livewire.contacto');
    }


    function sned_contact()
    {
        $name = $this->name;
        $email = strtolower(trim($this->email));
        $asunto = strtolower($this->asunto);
        $msg = $this->msg;

        if($name == "" OR $email == "" OR $asunto == ""){
            $this->dispatchBrowserEvent("send_error");
            return false;
        }

        $correo = new ContactoMailable($name, $email, $asunto, $msg);
        Mail::to("taoista@demo.cl")->send($correo);
        $this->dispatchBrowserEvent("send_email");

        $this->name = "";
        $this->email = "";
        $this->asunto = "";
        $this->msg = "";

    }

}
