@extends('layouts.template')

@section('content')
@include('partials.carrousel')
<hr class="featurette-divider">

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

            <form action="{{ url('/frase/'.$frase->id) }}" method="patch">
                @csrf
                {{ method_field('addSlider') }}
                <input type="submit"  onclick="return confirm('Phrase will be added to slider.')" class="btn btn-outline-dark" value="Add to Slider">
            </form>
            
            <a href="{{ url('/frase/'.$frase->id.'/edit') }}" class="btn btn-outline-dark">Edit</a>
            
            
            <form action="{{ url('/frase/'.$frase->id) }}" method="post">
                @csrf
                {{ method_field('delete') }}
                <input type="submit"  onclick="return confirm('Please confirm deletion.')" class="btn btn-outline-dark" value="Delete">
            </form>
        </div>
    </div>
    @endforeach
</div>
<div class="container d-flex mt-4 justify-content-center">
    {{ $frases->links('pagination::bootstrap-4') }}
</div>
@endsection