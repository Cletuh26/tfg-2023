<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuariosIds = DB::table('usuarios')->pluck('id');

        DB::table('dietas')->insert([
            'tipo' => fake()->randomElement(['equilibrada','deficit','calorica','personalizada']),
            'usuario_id' => fake()->randomElement($usuariosIds),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
