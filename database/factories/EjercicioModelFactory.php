<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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

        $imagen = fake()->image();

        $nombreImagen = basename($imagen);

        // Mover la imagen a la carpeta deseada
        Storage::move($imagen, 'public/ejercicios/' . $nombreImagen);
        
        return [
            'nombre' => fake()->name(),
            'descripcion' => fake()->text(),
            'imagen' => $nombreImagen,
            'tipo' => fake()->randomElement(['pierna','pecho','espalda','hombro','brazo']),
            'series' => fake()->numberBetween(1,5),
            'repeticiones' => fake()->numberBetween(8,12),
            'duracion' => fake()->numberBetween(1,60),
            'descanso' => fake()->numberBetween(15,30)
        ];
    }
}
