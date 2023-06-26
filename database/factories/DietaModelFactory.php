<?php

namespace Database\Factories;

use App\Models\UsuarioModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
        $imagen = fake()->image('storage/app/public/dietas');

        $nombreImagen = basename($imagen);
        
        $usuarios = UsuarioModel::all();

        return [
            'nombre' => fake()->word(),
            'descripcion' => fake()->text('50'),
            'imagen' => $nombreImagen,
            'tipo' => fake()->randomElement(['equilibrada','deficit','calorica','personalizada']),
            'usuario_id' => fake()->randomElement($usuarios)->id
        ];
    }
}
