<div class="row border">
    <p class="text-center mb-1 mt-2"><i class="fa-solid fa-filter" style="color: #f7ab55;"></i> Filtrar por</p>

    <div class="form-group col-md-6 text-center m-0 mb-2">
        <label for="tipo">Músculo:</label>
        <select wire:model="tipo" id="tipo" class="form-control text-center">
            <option value="">Todos</option>
            <option value="pecho">Pecho</option>
            <option value="pierna">Pierna</option>
            <option value="espalda">Espalda</option>
            <option value="brazo">Brazo</option>
            <option value="hombro">Hombro</option>
        </select>
    </div>

    <div class="form-group col-md-6 text-center m-0 mb-2">
        <label for="series">Número de series:</label>
        <select wire:model="series" id="series" class="form-control text-center">
            <option value="">Todas</option>
            <option value="1">1 serie</option>
            <option value="2">2 series</option>
            <option value="3">3 series</option>
            <option value="4">4 series</option>
        </select>
    </div>

    <div class="col-xl-12">
        <table class="table">
            <thead>
                <tr class="text-center align-middle">
                    <th>Imagen</th>
                    <th>Tipo</th>
                    <th>Descripción</th>
                    <th>Series</th>
                    <th>Repeticiones</th>
                    <th>Duración</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ejercicios as $ejercicio)
                    <tr class="text-center align-middle">
                        <td><img src="{{ '' }}" alt="Imagen ejercicio"></td>
                        <td>{{ ucfirst($ejercicio->tipo) }}</td>
                        <td>{{ $ejercicio->descripcion }}</td>
                        <td>{{ $ejercicio->series }}</td>
                        <td>{{ $ejercicio->repeticiones }}</td>
                        <td>{{ $ejercicio->duracion }} min</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>