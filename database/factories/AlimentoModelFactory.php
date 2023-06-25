<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

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
        $imagen = $this->faker->image();

        $nombreImagen = basename($imagen);

        // Mover la imagen a la carpeta deseada
        Storage::move($imagen, 'public/alimentos/' . $nombreImagen);
        
        return [
            'nombre' => $this->faker->name(),
            'descripcion' => $this->faker->text(),
            'calorias' => $this->faker->numberBetween(2,900),
            'imagen' => $nombreImagen,
            'tipo' => $this->faker->randomElement(['comida','bebida','otro']),
            'datos' => $this->faker->text(),
        ];
    }
}
