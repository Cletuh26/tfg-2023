@extends('layout.base')

@section('content')
<div class="row w-100">
    <div class="col-12 mt-3 text-center">
        <div>
            <h2 class="text-dark">Crear rutina</h2>
        </div>
    </div>

    <form action="{{ route('rutinas.store') }}" method="post">
        @csrf
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Nombre</strong>
                    <input type="text" name="nombre" class="form-control" placeholder="Introduce el nombre...">
                    @error('nombre')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 mt-2">
                <div class="form-group">
                    <strong>Descripción</strong>
                    <textarea class="form-control" style="height:150px" name="descripcion" placeholder="Agrega una descripción..."></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Tipo</strong>
                    <select class="form-select" name="tipo" id="tipo">
                        <option value="equilibrada">Equilibrada</option>
                        <option value="volumen">Volumen</option>
                        <option value="definicion">Definición</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <div class="form-group">
                    <strong>Imagen portada</strong><small> (PNG, JPG, JPEG)</small>
                    <input class="form-control" type="file" name="imagen" id="imagen" accept="image/png, image/jpeg, image/jpg">
                    @error('imagen')
                    <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-6 mt-2">
                <h2 class="text-center mt-5">Añadir ejercicios</h2>
            </div>
            <h5 class="text-center"><i class="fa-solid fa-filter" style="color: #ffb61a;"></i> Filtrar por</h5>
            <div class="border border-2 rounded border-warning w-50">
                <ul class="d-flex justify-content-around align-items-center">
                    <li class="d-flex gap-2">
                        <label for="grupo_muscular" class="text-center mx-1">Grupo muscular:</label>
                        <select class="form-select form-select-sm text-center" name="grupo_muscular" id="grupo_muscular">
                            <option value="pierna" selected>Pierna</option>
                            <option value="pecho">Pecho</option>
                            <option value="espalda">Espalda</option>
                            <option value="hombro">Hombro</option>
                            <option value="brazo">Brazo</option>
                        </select>
                    </li>
                </ul>
            </div>
            @if(count($ejercicios) != 0)
                <!-- Poner aquí los ejercicios -->
            @else
                <h3 class="text-danger text-center">No se han encontrado ejercicios</h3>
            @endif
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-2">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    </form>
</div>
@endsection