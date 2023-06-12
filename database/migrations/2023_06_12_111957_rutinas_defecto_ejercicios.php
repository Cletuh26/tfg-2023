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
        Schema::create('rutinas_defecto_ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('ejercicio_id')->unsigned();
            $table->bigInteger('rutina_defecto_id')->unsigned();
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
            $table->foreign('rutina_defecto_id')->references('id')->on('rutinas_defecto');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinas_defecto_ejercicios');
    }
};
