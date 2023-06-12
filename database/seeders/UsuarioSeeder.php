<?php

namespace Database\Seeders;

use App\Models\UsuarioModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the users seeds.
     */
    public function run(): void
    {
        UsuarioModel::factory(3)->create();
    }
}
