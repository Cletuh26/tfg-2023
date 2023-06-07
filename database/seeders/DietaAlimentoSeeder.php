<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietaAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dietasIds = DB::table('dietas')->pluck('id');
        $alimentosIds = DB::table('alimentos')->pluck('id');

        DB::table('dietas_alimentos')->insert([
            'dieta_id' => fake()->randomElement($dietasIds),
            'alimento_id' => fake()->randomElement($alimentosIds),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
