<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            GestorSeeder::class,
            UsuarioSeeder::class,
            RutinaDefectoSeeder::class,
            RutinaSeeder::class,
            EjercicioSeeder::class,
            DietaSeeder::class,
            EjercicioSeeder::class
        ]);
    }
}
