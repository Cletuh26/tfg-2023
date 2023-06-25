<?php

namespace App\Http\Livewire;

use App\Models\EjercicioModel;
use Livewire\Component;
use App\Models\RutinaEjercicioModel;
use Illuminate\Database\Eloquent\Builder;

class FiltroEjercicios extends Component
{
    public $rutina;
    public $ejercicios;

    public $tipo;
    public $series;

    // protected $queryString = ['tipo', 'series'];

    public function limpiar()
    {
        $this->reset(['tipo', 'series']);
    }

    public function updatedSubcategoria()
    {
        $this->resetPage();
    }

    public function updatedMarca()
    {
        $this->resetPage();
    }

    public function render()
    {
        $ejerciciosQuery = EjercicioModel::query()->whereHas('rutinas', function (Builder $query){
            $query->where('id', $this->rutina->id);
        });

        if ($this->tipo) {
            $this->ejercicios->where('tipo', $this->tipo);
        }

        // if ($this->series) {
        //     $ejerciciosQuery->where('series', $this->series);
        // }

        // $ejerciciosQuery = $ejerciciosQuery->get();

        return view('livewire.filtro-ejercicios', [
            'ejercicios' => $ejerciciosQuery,
        ]);
    }
}
