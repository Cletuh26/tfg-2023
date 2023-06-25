<?php

namespace Database\Factories;

use App\Models\AlimentoModel;
use App\Models\DietaModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DietaAlimentoModel>
 */
class DietaAlimentoModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $dietas = DietaModel::all();
        $alimentos = AlimentoModel::all();

        return [
            'dieta_id' => fake()->randomElement($dietas)->id,
            'alimento_id' => fake()->randomElement($alimentos)->id,
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ];
    }
}
