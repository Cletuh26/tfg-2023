<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dietas')->insert([
            'tipo' => fake()->randomElement(['equilibrada','deficit','calorica','personalizada'])
        ]);
    }
}
