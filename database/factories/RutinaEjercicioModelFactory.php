<?php

namespace Database\Factories;

use App\Models\EjercicioModel;
use App\Models\RutinaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RutinaEjercicioModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $rutinas = RutinaModel::all();
        $ejercicios = EjercicioModel::all();

        return [
            'rutina_id' => fake()->randomElement($rutinas)->id,
            'ejercicio_id' => fake()->randomElement($ejercicios)->id,
        ];
    }
}
