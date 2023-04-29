<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ConsultaIndex extends Component
{

    public $name;
    public $email;


    public function mount()
    {
        dd("hola");
    }

    public function render()
    {
        return view('livewire.consulta-index');
    }

    function send_question()
    {
        $name = $this->name;
        $email = $this->email;

        if($name == "" OR $email == ""){
            dd("error");
            return false;
        }

        dd("enviando...");

    }

}
