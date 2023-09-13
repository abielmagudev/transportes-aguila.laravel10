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
            $table->string('nombre')->unique();
            $table->string('rfc')->unique();
            $table->string('direccion');
            $table->unsignedInteger('numero_exterior')->nullable();
            $table->unsignedInteger('numero_interior')->nullable();
            $table->string('colonia')->nullable();
            $table->string('codigo_postal');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->string('cuenta_bancaria')->nullable();
            $table->string('moneda');
            $table->string('regimen_fiscal');
            $table->boolean('retencion');
            $table->string('tipo_pago');
            $table->string('tasa_iva');
            $table->string('cuenta_contable');
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
