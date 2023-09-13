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
        Schema::create('origen_destinos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->unique();
            $table->string('rfc')->unique();
            $table->string('direccion');
            $table->string('calle');
            $table->string('numero_exterior');
            $table->string('numero_interior')->nullable();
            $table->string('codigo_postal');
            $table->string('pais');
            $table->string('estado');
            $table->string('ciudad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('origen_destinos');
    }
};
