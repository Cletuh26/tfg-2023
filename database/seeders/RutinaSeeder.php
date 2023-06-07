<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuariosIds = DB::table('usuarios')->pluck('id');

        DB::table('rutinas')->insert([
            'tipo' => fake()->randomElement(['equilibrada','definicion','volumen']),
            'usuario_id' => fake()->randomElement($usuariosIds),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
