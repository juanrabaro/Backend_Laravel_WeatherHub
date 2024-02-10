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
        Schema::create('ciudades_usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ciudad_id');
            $table->unsignedInteger('usuario_id');
            $table->foreign('ciudad_id')->references('id')->on('ciudades');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ciudades_usuarios');
    }
};
