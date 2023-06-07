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
            'imagen' => fake()->image(),
            'tipo' => fake()->randomElement(['pierna','pecho','espalda','hombro','brazo','gluteos']),
            'tipo_ejercicio' => fake()->randomElement(['1','2','3','4']),
            'series' => fake()->numberBetween(1,5),
            'repeticiones' => fake()->numberBetween(8,12),
            'duracion' => fake()->numberBetween(1,60),
            'descanso' => fake()->numberBetween(15,30),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
