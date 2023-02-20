@extends('layouts.app')

@section('title','Inspirate - Administrador')

@section('content')

<div class="d-flex gap-2 pb-3 d-md-flex justify-content-center">
    <a href="#" class="btn btn-primary" role="button" data-bs-toggle="button">Quotes</a>
    <a href="{{ url('/frase/create') }}" class="btn btn-primary" >Add new quote</a>
</div>

<div class="container">
    
    @foreach ($frases as $frase)
            
    <div class="card text-white pb-4 ">
        <img class="card-img" src="{{$frase->image}}" alt="Card image">
        <div class="card-img-overlay">
            <h5 class="card-title">{{$frase->text}}</h5>
            <p class="card-text">{{$frase->author}}</p>
        </div>
        <div class="btn-group btn-group-sm" role="group" aria-label="Small button group">
            <a type="button" class="btn btn-outline-dark">Add to Slider</a>
            <a type="button" class="btn btn-outline-dark">Edit</a>
            <a type="button" class="btn btn-outline-dark">Delete</a>
          </div>
    </div>

    @endforeach 
    {{ $frases->links('pagination::bootstrap-4') }}
    
</div>
</main>
@endsection