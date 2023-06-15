<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EjercicioModel>
 */
class EjercicioModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->name(),
            'descripcion' => fake()->text(),
            'imagen' => fake()->image(),
            'tipo' => fake()->randomElement(['pierna','pecho','espalda','hombro','brazo','gluteos']),
            'tipo_ejercicio' => fake()->randomElement(['1','2','3','4']),
            'series' => fake()->numberBetween(1,5),
            'repeticiones' => fake()->numberBetween(8,12),
            'duracion' => fake()->numberBetween(1,60),
            'descanso' => fake()->numberBetween(15,30)
        ];
    }
}
