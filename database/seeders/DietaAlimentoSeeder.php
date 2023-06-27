<?php

namespace Database\Seeders;

use App\Models\DietaAlimentoModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DietaAlimentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DietaAlimentoModel::factory(25)->create();
    }
}
