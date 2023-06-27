<?php

namespace Database\Seeders;

use App\Models\RutinaModel;
use Illuminate\Database\Seeder;

class RutinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RutinaModel::factory(10)->create();
    }
}
