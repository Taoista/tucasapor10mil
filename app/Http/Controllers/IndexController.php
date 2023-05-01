<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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


}
