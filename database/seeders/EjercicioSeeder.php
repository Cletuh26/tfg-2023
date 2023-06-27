<?php

namespace Database\Seeders;

use App\Models\EjercicioModel;
use Illuminate\Database\Seeder;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EjercicioModel::factory(20)->create();
    }
}
