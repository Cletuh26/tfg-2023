<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
        // $imagen = fake()->image('storage/app/public/rutinas-defecto');

        // $nombreImagen = basename($imagen);
        
        return [
            'descripcion' => fake()->realText(),
            'tipo' => fake()->randomElement(['equilibrada','volumen','definicion']),
            'imagen' => 'rutinas.jpeg',//$nombreImagen,
        ];
    }
}
