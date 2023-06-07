<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('alimentos')->insert([
            'nombre' => fake()->name(),
            'descripcion' => fake()->text(),
            'imagen' => fake()->image(),
            'tipo' => fake()->randomElement(['comida','bebida','otro']),
            'datos' => fake()->text()
        ]);
    }
}
