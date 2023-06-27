<?php

namespace Database\Seeders;

use App\Models\UsuarioModel;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the users seeds.
     */
    public function run(): void
    {
        UsuarioModel::factory(5)->create();
        UsuarioModel::factory()->create(['email' => 'a@a.com', 'password' => Hash::make('123123'), 'nick' => 'Ismxxel']);
    }
}
