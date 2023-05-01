<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('qr_detalle', function (Blueprint $table) {
            $table->id();
            $table->datetime("fecha")->default(now());
            $table->string("seccion_id", 100);
            $table->integer("id_detalle_compra");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qr_detalle');
    }
};
