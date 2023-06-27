<?php

namespace Database\Seeders;

use App\Models\DietaModel;
use Illuminate\Database\Seeder;

class DietaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DietaModel::factory(10)->create();
    }
}
