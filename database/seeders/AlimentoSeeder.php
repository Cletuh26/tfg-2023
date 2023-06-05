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
            'tipo' => fake()->randomElement(['comida','bebida','otro']),
            'datos' => fake()->text()
        ]);
    }
}
