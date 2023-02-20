@extends('layouts.template')

@section('title','Inspirate - Administrador')

@section('content')
<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Frases</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Agregar nueva frase</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Agregar frase al carrusel</a></li>
      </ul>
    </li>
  </ul>
    <div class="container-md d-flex justify-content-around">

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
            <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Borrar</a>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
            <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Borrar</a>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
            <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Borrar</a>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
            <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Borrar</a>
                <a href="#" class="btn btn-primary">Editar</a>
            </div>
        </div>
    </div>
</main>
@endsection