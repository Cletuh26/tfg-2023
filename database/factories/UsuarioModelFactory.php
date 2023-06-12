<?php

namespace Database\Factories;

use App\Models\GestorModel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UsuarioModel>
 */
class UsuarioModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $telefono = '6' . fake()->numerify('##') . ' ' . fake()->numerify('###') . ' ' . fake()->numerify('###');
        $email = fake()->email();
        $nick = explode('@',$email)[0];
        $peso = fake()->randomFloat(2,50,150);
        $altura = fake()->randomFloat(2,1,2);
        $altura2 = $altura * $altura;
        $imc = round($peso / ($altura2),2);

        $gestores = GestorModel::all();
        
        return [
            'dni' => fake()->numerify('########') . fake()->randomLetter(),
            'email' => $email,
            'telefono' => $telefono,
            'nick' => $nick,
            'password' => bcrypt('pass'),
            'estado' => 'alta',
            'peso' => $peso,
            'altura' => $altura,
            'imc' => $imc,
            'gestor_id' => fake()->randomElement($gestores)->id,
        ];
    }
}
