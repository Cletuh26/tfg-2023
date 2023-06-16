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
        RutinaDefectoModel::create(['descripcion' => 'Este tipo de rutinas estan enfocadas a mantener un cuerpo enérgico y sano.','tipo' => 'equilibrada', 'imagen' => 'images/rutinas_defecto/equilibrada.jpeg']);
        RutinaDefectoModel::create(['descripcion' => 'Las rutinas de volumen nos ayudan a ganar masa muscular para así agrandar nuestro cuerpo.','tipo' => 'volumen', 'imagen' => 'images/rutinas_defecto/volumen.jpg']);
        RutinaDefectoModel::create(['descripcion' => 'Se enfoca sobretodo en eliminar grasa residual de nuestro sistema y así tener una mejor figura.','tipo' => 'definicion', 'imagen' => 'images/rutinas_defecto/definicion.jpg']);
    }
}
