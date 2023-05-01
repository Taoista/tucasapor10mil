<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TipoTarjeta;


class TipoTarjetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configuracion = new TipoTarjeta();
        $configuracion->cod = "VD";
        $configuracion->name = "Venta Debito";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "VN";
        $configuracion->name = "Venta Normal";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "VC";
        $configuracion->name = "Venta en cuotas";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "SI";
        $configuracion->name = "3 cuotas sin interés";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "S2";
        $configuracion->name = "2 cuotas sin interés";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "NC";
        $configuracion->name = "Cuotas sin interés";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "VP";
        $configuracion->name = "Venta Prepago";
        $configuracion->save();

        $configuracion = new TipoTarjeta();
        $configuracion->cod = "NO";
        $configuracion->name = "Cuotas sin interés";
        $configuracion->save();
    }
}
