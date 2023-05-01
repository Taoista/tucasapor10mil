<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;

class QrController extends Controller
{

    public $qr;

    function __construct($uuid)
    {
        $url = url("/")."api/".$uuid;
        $this->qr = QrCode::size(300)->generate($url);
    }


    function generate_qr(){
        return $this->qr;
    }


}
