<?php

namespace Database\Factories;

use App\Models\EjercicioModel;
use App\Models\RutinaDefectoModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RutinaDefectoEjercicioModel>
 */
class RutinaDefectoEjercicioModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $ejercicios = EjercicioModel::all();
        $rutinasDefecto = RutinaDefectoModel::all();

        return [
            'ejercicio_id' => fake()->randomElement($ejercicios)->id,
            'rutina_defecto_id' => fake()->randomElement($rutinasDefecto)->id
        ];
    }
}
