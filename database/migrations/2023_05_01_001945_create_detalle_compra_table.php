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
        Schema::create('detalle_compra', function (Blueprint $table) {
            $table->id();
            $table->datetime("fecha")->useCurrent();
            $table->boolean("estado")->default(0);
            $table->integer("id_tbk")->default(0);
            $table->string("nombre", 100);
            $table->string("email", 100);
            $table->string("direccion", 100);
            $table->string("ciudad", 100);
            $table->string("codigo_postal", 50);
            $table->string("telefono", 10);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detalle_compra');
    }
};
