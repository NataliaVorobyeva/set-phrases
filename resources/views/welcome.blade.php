@extends('layouts.app')


@section('content')
@include('partials.carrousel')
    <hr class="featurette-divider">
    <main class="container">

        @foreach ($frases as $frase)
            
        <div class="card bg-dark text-white">
            <img class="card-img" src="{{$frase->image}}" alt="Card image">
            <div class="card-img-overlay">
            <h5 class="card-title">{{$frase->text}}</h5>
            <p class="card-text">{{$frase->author}}</p>
            </div>
        </div>

        @endforeach 
        
    </main>
    <div class="container d-flex mt-4 justify-content-center">
        {{ $frases->links('pagination::bootstrap-4') }}
    </div>
@endsection

