<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RutinaDefectoModel>
 */
class RutinaDefectoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'descripcion' => fake()->realText(),
            'tipo' => fake()->randomElement(['equilibrada','volumen','definicion']),
            'imagen' => fake()->image('storage/app/public/images/rutinas_defecto')
        ];
    }
}
