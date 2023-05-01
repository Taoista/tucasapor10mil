<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QrDetalle extends Model
{
    use HasFactory;
    protected $table = "qr_detalle";
    public $timestamps = false;
}
