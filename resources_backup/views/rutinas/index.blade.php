@extends('layout.base')

@section('content')
<div class="row w-100">
    <div class="col-12 mt-3 text-center">
        <div>
            <h2 class="text-dark">Rutinas predefinidas</h2>
        </div>
    </div>

    <div class="col-12 mt-4 d-flex justify-content-center align-items-center gap-5 mb-3">
        @foreach($rutinasDefecto as $rutinaD)
        <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($rutinaD->imagen) }}" class="card-img-top" alt="Imagen rutina">
            <div class="card-body">
                <h4 class="card-title">{{ ucfirst($rutinaD->tipo) }}</h4>
                <p class="card-text">{{ ucfirst($rutinaD->descripcion) }}</p>
                <a href="{{ route('rutinas.index') }}" class="btn btn-primary">Ver rutina</a>
            </div>
        </div>
        @endforeach
    </div>

    <div class="col-12 mt-5 text-center">
        <div>
            <h2 class="text-dark">Rutinas personalizadas</h2>
        </div>
    </div>

    @if(count($rutinasPersonalizadas) < 1)
    <div class="col-12 mt-1 text-center">
        <div>
            <h5 class="text-danger">No se han encontrado rutinas personalizadas</h5>
            <a href="{{ route('rutinas.create') }}" class="btn btn-success"><i class="fa-solid fa-plus"></i> Crear nueva rutina</a>
        </div>
    </div>
    @else
    <div class="col-12 mt-4 d-flex justify-content-center align-items-center gap-5 mb-3">
        @foreach($rutinasPersonalizadas as $rutinaP)
        <div class="card" style="width: 18rem;">
            <img src="{{ Storage::url($rutinaP->imagen) }}" class="card-img-top" alt="Imagen rutina">
            <div class="card-body">
                <h4 class="card-title">{{ ucfirst($rutinaP->tipo) }}</h4>
                <p class="card-text">{{ ucfirst($rutinaP->descripcion) }}</p>
                <a href="{{ route('rutinas.index') }}" class="btn btn-primary">Ver rutina</a>
            </div>
        </div>
        @endforeach
    </div>
    @endif
</div>
@endsection