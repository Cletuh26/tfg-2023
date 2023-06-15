<?php

namespace Database\Factories;

use App\Models\UsuarioModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DietaModel>
 */
class DietaModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuarios = UsuarioModel::all();

        return [
            'tipo' => fake()->randomElement(['equilibrada','deficit','calorica','personalizada']),
            'usuario_id' => fake()->randomElement($usuarios)->id
        ];
    }
}
