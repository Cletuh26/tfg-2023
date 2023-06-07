<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutinaEjerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rutinasIds = DB::table('rutinas')->pluck('id');
        $ejerciciosIds = DB::table('ejercicios')->pluck('id');

        DB::table('rutinas_ejercicios')->insert([
            'rutina_id' => fake()->randomElement($rutinasIds),
            'ejercicio_id' => fake()->randomElement($ejerciciosIds),
            'created_at' => date_create(),
            'updated_at' => date_create(),
        ]);
    }
}
