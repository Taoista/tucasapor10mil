<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransbankT extends Model
{
    use HasFactory;
    protected $table = "transbank_t";
    public $timestamps = false;
}
