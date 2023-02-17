@extends('layouts.template')

@section('content')
    <hr class="featurette-divider">
    <main class="container">
        <div class="card bg-dark text-white">
            <img class="card-img" src="{{URL::asset('/imgs/fondo-exemple.webp')}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">Some representative placeholder content for the first slide of the carousel.</h5>
            <p class="card-text">Author</p>
            </div>
        </div>
    </main>
@endsection

