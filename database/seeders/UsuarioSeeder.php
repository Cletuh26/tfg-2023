<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the users seeds.
     */
    public function run(): void
    {
        $telefono = '6' . fake()->numerify('##') . ' ' . fake()->numerify('###') . ' ' . fake()->numerify('###');

        DB::table('usuarios')->insert([
            'dni' => fake()->numerify('########') . fake()->randomLetter(),
            'email' => fake()->email(),
            'telefono' => $telefono,
            'nick' => Str::random(10),
            'contrasenya' => Hash::make('password'),
            'estado' => 'alta',
            'peso' => fake()->randomFloat(2,50,150),
            'altura' => fake()->randomFloat(2,1,2),
            'imc' => null,
            'gestor_id' => 1
        ]);
    }
}
