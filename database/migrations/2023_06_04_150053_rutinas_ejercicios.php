<?php

namespace Database\Migrations;

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
        Schema::create('rutinas_ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rutina_id')->unsigned();
            $table->bigInteger('ejercicio_id')->unsigned();
            $table->foreign('rutina_id')->references('id')->on('rutinas');
            $table->foreign('ejercicio_id')->references('id')->on('ejercicios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rutinas_ejercicios');
    }
};
