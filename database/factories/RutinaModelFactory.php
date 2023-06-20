<?php

namespace Database\Factories;

use App\Models\UsuarioModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RutinaModel>
 */
class RutinaModelFactory extends Factory
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
            'nombre' => fake()->word(),
            'descripcion' => fake()->realText(),
            'tipo' => fake()->randomElement(['equilibrada','definicion','volumen']),
            'imagen' => fake()->image(),
            'usuario_id' => fake()->randomElement($usuarios)->id
        ];
    }
}
