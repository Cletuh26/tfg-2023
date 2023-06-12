<?php

namespace Database\Seeders;

use App\Models\RutinaDefectoModel;
use Illuminate\Database\Seeder;

class RutinaDefectoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RutinaDefectoModel::factory(1)->create();
    }
}
