<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Configuracion;

class ConfiguracionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $configuracion = new Configuracion();
        $configuracion->detalle = "production";
        $configuracion->dato = "0";
        $configuracion->save();

        $configuracion = new Configuracion();
        $configuracion->detalle = "tbk-cc";
        $configuracion->dato = "no";
        $configuracion->save();

        $configuracion = new Configuracion();
        $configuracion->detalle = "tbk-api-key";
        $configuracion->dato = "no";
        $configuracion->save();

        $configuracion = new Configuracion();
        $configuracion->detalle = "email-contact";
        $configuracion->dato = "taoista-@hotmail.com";
        $configuracion->save();
    }
}
