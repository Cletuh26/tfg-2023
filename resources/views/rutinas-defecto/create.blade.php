@include('partials.base')

<div class="row w-100">
    <div class="col-12 mt-3 text-center">
        <div>
            <h2 class="text-dark">Crear rutina</h2>
        </div>
    </div>

    <form action="{{ route('rutinas.store') }}" method="post" class="mb-5">
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
            <ul class="d-flex list-inline justify-content-evenly">
                <li>
                    <label for="musculo" class="fs-5">Musculo</label>
                    <select class="p-2" name="musculo" id="musculo">
                        <option value="todos">Todos</option>
                        <option value="pierna">Pierna</option>
                        <option value="pecho">Pecho</option>
                        <option value="espalda">Espalda</option>
                        <option value="hombro">Hombro</option>
                        <option value="brazo">Brazo</option>
                    </select>
                </li>
                <li>
                    <label for="buscar_tipo" class="fs-5">Tipo</label>
                    <select class="p-2" name="buscar_tipo" id="buscar_tipo">
                        <option value="repeticiones">Repeticiones</option>
                        <option value="duracion">Duración</option>
                    </select>
                </li>
                <li>
                    <form class="d-flex align-items-center">
                        <input class="m-auto" type="search" placeholder="Buscar ejercicio..." aria-label="Buscar">
                        <button class="btn btn-outline-success" type="submit">Buscar</button>
                    </form>
                </li>
            </ul>

            @if(count($ejercicios) != 0)
            @foreach($ejercicios as $ejercicio)
            <div class="card p-2 m-2" style="width: 16rem;">
                <img src="{{ Storage::url($ejercicio->imagen) }}" class="card-img-top" alt="Imagen ejercicio">
                <div class="card-body">
                    <h4 class="card-title">{{ ucfirst($ejercicio->nombre) }}</h4>
                    <p class="card-text">{{ ucfirst($ejercicio->descripcion) }}</p>
                </div>
                <div class="w-auto mb-2">
                    <ul>
                        <li>Series: <strong>{{ $ejercicio->series}}</strong></li>
                        <li>Repeticiones: <strong>{{ $ejercicio->repeticiones}}</strong></li>
                        @if($ejercicio->duracion > 0)
                        <li>Duración: <strong>{{ $ejercicio->duracion}} minutos</strong></li>
                        @endif
                        <li>Descanso: <strong>{{ $ejercicio->descanso}} minutos</strong></li>
                    </ul>
                </div>
                <a href="{{ route('ejercicios.index') }}" class="btn btn-success w-auto m-auto"><i class="fa-solid fa-plus"></i> Añadir ejercicio</a>
            </div>
            @endforeach
            @else
            <h3 class="text-danger text-center">No se han encontrado ejercicios</h3>
            @endif
            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg">Crear rutina</button>
            </div>
        </div>
    </form>
</div>