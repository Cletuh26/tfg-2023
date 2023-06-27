<?php

namespace Database\Seeders;

use App\Models\RutinaDefectoEjercicioModel;
use Illuminate\Database\Seeder;

class RutinaDefectoEjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RutinaDefectoEjercicioModel::factory(25)->create();
    }
}
