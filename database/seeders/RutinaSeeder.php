<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RutinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('rutinas')->insert([
            'tipo' => fake()->randomElement(['equilibrada','definicion','volumen'])
        ]);
    }
}
