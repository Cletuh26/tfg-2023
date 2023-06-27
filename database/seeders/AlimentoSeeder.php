<?php

namespace Database\Seeders;

use App\Models\AlimentoModel;
use Illuminate\Database\Seeder;

class AlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AlimentoModel::factory(20)->create();
    }
}
