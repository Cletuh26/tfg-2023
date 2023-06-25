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
            $table->enum('tipo',['pierna','pecho','espalda','hombro','brazo']);
            $table->integer('series')->default(1);
            $table->integer('repeticiones')->nullable();
            $table->integer('duracion')->nullable();
            $table->integer('descanso')->nullable(); // entre ejercicios
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
