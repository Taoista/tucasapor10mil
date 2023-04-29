<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Mail\ConsultaMailable;
use Illuminate\Support\Facades\Mail;

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
        $email = $this->email;
        $msg = $this->msg;

        if($name == "" OR $email == ""){
            $this->dispatchBrowserEvent("send_error");
            return false;
        }

        $contact = new ConsultaMailable($email, $name, $msg);

        Mail::to("pepeito@demo.cl")->send($contact);

        $this->name = "";
        $this->email = "";
        $this->msg = "";
        $this->dispatchBrowserEvent("send_query");

    }

}
