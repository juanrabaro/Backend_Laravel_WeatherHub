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
        Schema::create('tiempo_ciudades', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ciudad_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->integer('temperatura_max');
            $table->integer('temperatura_min');
            $table->integer('viento');
            $table->integer('humedad');
            $table->integer('precipitacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiempo_ciudades');
    }
};
