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
        Schema::create('transbank', function (Blueprint $table) {
            $table->id();
            $table->datetime("fecha")->default(now());
            $table->boolean("estado")->default(0);
            $table->integer("id_detalle_compra")->default(0);
            $table->string("seccion_id", 100);
            $table->string("tocken", 100)->default(0);
            $table->string("responseCode", 2)->default("-1");
            $table->string("authorizationCode", 4)->default(0);
            $table->string("paymentTypeCode", 2)->default(0);
            $table->string("installmentsNumber")->default(0);
            $table->string("installmentsAmount")->default(0);
            $table->string("cardNumber", 4)->default(0);
            $table->integer("total");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transbank');
    }
};
