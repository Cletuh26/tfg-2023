<?php

namespace Database\Seeders;

use App\Models\RutinaEjercicioModel;
use Illuminate\Database\Seeder;

class RutinaEjerciciosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RutinaEjercicioModel::factory(4)->create();
    }
}
