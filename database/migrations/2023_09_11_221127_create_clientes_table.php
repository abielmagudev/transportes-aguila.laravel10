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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('rfc');
            $table->string('direccion');
            $table->unsignedInteger('numero_exterior')->nullable();
            $table->unsignedInteger('numero_interior')->nullable();
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('ciudad')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('cuenta_banco')->nullable();
            $table->string('moneda')->nullable();
            $table->string('regimen_fiscal')->nullable();
            $table->boolean('retencion_cuatro_porciento');
            $table->string('tipo_pago')->nullable();
            $table->string('tasa_iva')->nullable();
            $table->string('cuenta_contable')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};