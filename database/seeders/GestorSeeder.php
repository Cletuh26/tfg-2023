<?php

namespace Database\Seeders;

use App\Models\GestorModel;
use Illuminate\Database\Seeder;

class GestorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        GestorModel::factory(1)->create();
    }
}
