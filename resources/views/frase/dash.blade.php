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
            <form action="{{ url('/frase/'.$frase->id.'/edit') }}" method="post">
                @csrf
                {{ method_field('get') }} 
                <input type="submit" class="btn btn-outline-dark" value="Update">
            </form>

            {{-- <a href="{{ url('/frase/'.$frase->id) }}" class="btn btn-outline-dark">Update</a> --}}
            
            <form action="{{ url('/frase/'.$frase->id) }}" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="submit"  onclick="return confirm('Please confirm deletion.')" class="btn btn-outline-dark" value="Delete">
            </form>
        </div>
    </div>
    @endforeach 
    {{ $frases->links('pagination::bootstrap-4') }}
    
</div>
</main>
@endsection