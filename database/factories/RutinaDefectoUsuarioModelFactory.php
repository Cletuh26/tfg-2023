<?php

namespace Database\Factories;

use App\Models\RutinaDefectoModel;
use App\Models\UsuarioModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RutinaDefectoUsuarioModel>
 */
class RutinaDefectoUsuarioModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $usuarios = UsuarioModel::all();
        $rutinasDefecto = RutinaDefectoModel::all();

        return [
            'usuario_id' => fake()->randomElement($usuarios)->id,
            'rutina_defecto_id' => fake()->randomElement($rutinasDefecto)->id
        ];
    }
}
