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
        Schema::create('dietas_alimentos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('dieta_id')->unsigned();
            $table->bigInteger('alimento_id')->unsigned();
            $table->foreign('dieta_id')->references('id')->on('dietas');
            $table->foreign('alimento_id')->references('id')->on('alimentos');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dietas_alimentos');
    }
};
