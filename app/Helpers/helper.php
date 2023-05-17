<?php
use App\Models\Configuracion;



function demo()
{
    return "hola soy un helper";
}

function money_format($val)
{
    return "$ ".number_format($val, 0, ",", ".");
}

function get_tao()
{
    $data = Configuracion::select("dato")->where("detalle","register-tao")->get()->first()->dato;

    if($data == 1){
        return true;
    }

    return false;

}

