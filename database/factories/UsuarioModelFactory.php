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
        $peso = fake()->numberBetween(50,150);
        $altura = fake()->numberBetween(150,200);
        $alturaDec = $altura / 100;
        $altura2 = $alturaDec * $alturaDec;
        $imc = round($peso / ($altura2),2);

        $gestores = GestorModel::all();
        
        return [
            'dni' => fake()->numerify('########') . strtoupper(fake()->randomLetter()),
            'email' => $email,
            'telefono' => $telefono,
            'nick' => $nick,
            'password' => '$2y$10$lvj/IaS/QyvwfokC/GyNZOEdAEmpDbi8Yzqi/WojkDUHjejX.PUxi', //pass
            'estado' => 'alta',
            'peso' => $peso,
            'altura' => $altura,
            'imc' => $imc,
            'gestor_id' => fake()->randomElement($gestores)->id,
        ];
    }
}
