<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlimentoModel>
 */
class AlimentoModelFactory extends Factory
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
            'imagen' => fake()->image('storage/app/public/images/alimentos'),
            'tipo' => fake()->randomElement(['comida','bebida','otro']),
            'datos' => fake()->text(),
        ];
    }
}
