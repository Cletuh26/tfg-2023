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
        Schema::create('ejercicios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('descripcion');
            $table->binary('imagen')->nullable();
            $table->enum('tipo',['pierna','pecho','espalda','hombro','brazo','gluteos']);
            $table->enum('tipo_ejercicio',['1','2','3','4']);
            /* Tipos:
            * 1 - Tienen series y repeticiones (default)
            * 2 - Tienen series y duración
            * 3 - Tienen repeticiones
            * 4 - Tienen series, repeticiones y duración
            */
            $table->integer('series');
            $table->integer('repeticiones');
            $table->integer('duracion');
            $table->integer('descanso'); // entre ejercicios
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ejercicios');
    }
};
