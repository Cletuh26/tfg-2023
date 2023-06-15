<?php

namespace Database\Seeders;

use App\Models\RutinaDefectoUsuarioModel;
use Illuminate\Database\Seeder;

class RutinaDefectoUsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RutinaDefectoUsuarioModel::factory(3)->create();
    }
}
