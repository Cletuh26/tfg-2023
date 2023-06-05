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
        Schema::create('usuarios_rutinas_defecto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('rutina_defecto_id')->unsigned();
            $table->bigInteger('usuario_id')->unsigned();
            $table->foreign('rutina_defecto_id')->references('id')->on('rutinas_defecto');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios_rutinas_defecto');
    }
};
