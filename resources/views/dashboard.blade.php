@extends('layouts.auth-template')

@section('content')
<div class="container">
    <div class="card-body">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif

            {{ __('Wellcome name_user') }}
    </div>
    <ul class="nav nav-pills">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Librería de frases</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="#">Mis Likes</a>
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
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
                <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
                <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
            </div>
        </div>

        <div class="card text-white" style="width: 18rem;">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
                <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
                <p class="card-text">Author</p>
            </div>
            <div class="card-body d-flex justify-content-around">
                <a href="#" class="btn btn-primary">Like</a>
                <a href="#" class="btn btn-primary">Dislike</a>
            </div>
        </div>
    </div>
</div>
@endsection
