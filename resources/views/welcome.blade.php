@extends('layout.base')

@if (session('logout'))
<div class="rounded alert-success p-3 text-center">
    {{ session('logout') }}
</div>
@endif

@if (session('login'))
<div class="rounded alert-success p-3 text-center">
    {{ session('login') }}
</div>
@endif

@if (session('registro'))
<div class="rounded alert-success p-3 text-center">
    {{ session('registro') }}
</div>
@endif

@section('banner')
<div class="bg-banner w-100 h-30 d-flex justify-content-center flex-column">
    <h3 class="text-center text-white">Es hora...</h3>
    <h2 class="text-center text-white ">De ponerse en forma</h2>
</div>
@endsection

@section('content')
<div class="card" style="width: 18rem; margin:2rem;">
    <img src="{{ asset('images/rutinas.jpeg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Rutinas</h5>
        <p class="card-text">¿Estas intentado agrandar tus músculos? ¿Buscas una rutina para bajar tu peso? Descúbrelas todas y si no, créala.</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>
</div>

<div class="card" style="width: 18rem; margin:2rem;">
    <img src="{{ asset('images/dietas.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Dietas</h5>
        <p class="card-text">Encuentra la dieta que más se ajuste a tus gustos. Si eso no funciona, siempre puedes crear la tuya personalizada!</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>
</div>

<div class="card" style="width: 18rem; margin:2rem;">
    <img src="{{ asset('images/ejercicios.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Ejercicios</h5>
        <p class="card-text">Explora el listado de ejercicios que ofrecemos. Si no te convencen o no encuentras el que estas buscando, añadelo tu mismo!</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>
</div>

<div class="card" style="width: 18rem; margin:2rem;">
    <img src="{{ asset('images/alimentos.jpg') }}" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Alimentos</h5>
        <p class="card-text">Disponemos de una amplia variedad de alimentos para hacer unas dietas variadas para cada tipo de persona.</p>
        <a href="#" class="btn btn-primary">Más información</a>
    </div>
</div>
@endsection