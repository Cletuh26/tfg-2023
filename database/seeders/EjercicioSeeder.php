<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ejercicios')->insert([
            'nombre' => fake()->name(),
            'descripcion' => fake()->text(),
            'tipo' => fake()->randomElement(['pierna','pecho','espalda','hombro','brazo','gluteos']),
            'tipo_ejercicio' => fake()->randomElement(['1','2','3','4']),
            'series' => fake()->random_int(1,5),
            'repeticiones' => fake()->random_int(8,12),
            'duracion' => fake()->random_int(1,60),
            'descanso' => fake()->random_int(15,30)
        ]);
    }
}
