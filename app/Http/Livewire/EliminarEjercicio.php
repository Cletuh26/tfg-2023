<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EliminarEjercicio extends Component
{
    public $ejercicioId;
    public $isChecked;

    public function toggleEliminar()
    {
        if ($this->isChecked) {
            // Realizar la lógica de eliminación del ejercicio de la rutina
            // Puedes utilizar Eloquent para eliminar la relación entre la rutina y el ejercicio o cualquier otra lógica que tengas implementada
        }

        // Emitir un evento para actualizar la vista si es necesario
        $this->emit('ejercicioEliminado', $this->ejercicioId);
    }

    public function render()
    {
        return view('livewire.eliminar-ejercicio');
    }
}
