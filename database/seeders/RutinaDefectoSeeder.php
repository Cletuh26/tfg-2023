<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class RutinaDefectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuariosIds = DB::table('usuarios')->pluck('id');
        
        DB::table('rutinas_defecto')->insert([
            'tipo' => 'equilibrada',
            'usuario_id' => fake()->randomElement($usuariosIds),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
