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
        $imagenRandom = fake()->image();
        $imagenRandom = basename($imagenRandom);
        
        return [
            'descripcion' => fake()->realText(),
            'tipo' => fake()->randomElement(['equilibrada','volumen','definicion']),
            'imagen' => $imagenRandom
        ];
    }
}
