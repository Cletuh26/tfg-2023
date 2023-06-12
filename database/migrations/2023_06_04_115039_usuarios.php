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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dni')->unique();
            $table->string('email');
            $table->string('telefono');
            $table->string('nick');
            $table->string('password');
            $table->enum('estado',['alta','baja']);
            $table->float('peso');
            $table->float('altura');
            $table->float('imc')->nullable();
            $table->bigInteger('gestor_id')->unsigned();
            $table->foreign('gestor_id')->references('id')->on('gestores');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
