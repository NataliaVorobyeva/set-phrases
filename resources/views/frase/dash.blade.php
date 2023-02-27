@extends('layouts.app')
@section('title','Inspirate - Administrador')
@section('content')
@include('partials.carrousel')
<div class="mt-5 container d-flex flex-wrap justify-content-center">
    <ul class="nav nav-pills mb-4">
        <li class="nav-item">
            <a href="#" class="btn btn-outline-primary me-2" role="button" data-bs-toggle="button">Quotes</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/frase/create') }}" class="btn btn-primary" >Add New Quote</a>
        </li>
    </ul>
    <hr class="featurette-divider">
    <main class="d-flex justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-auto grid justify-content-center gap-4">
            @foreach ($frases as $frase)
            <div class="card-group col-10 col-lg-4 col-md-4 text-white" style="filter: drop-shadow(0px 4px 4px rgba(145, 33, 219, 0.5)); border: 2px solid #9121DB; border-radius: 8px; padding: 0; overflow: hidden;">
                <img class="card-img w-100" src="{{$frase->image}}" alt="Card image">
                <div class="card-img-overlay overflow-y-scroll m-4" style="text-shadow: 0px 0px 4px #000000;">
                    <h5 class="card-title fw-bolder mb-2">{{$frase->text}}</h5>
                    <p class="card-text m-0">{{$frase->author}}</p>
                </div>
                <div class="card-img-overlay overflow-y-scroll m-4 d-flex align-items-end justify-content-center">
                    <ul class="nav nav-pills gap-2">
                        <li class="nav-item" style="shadow: 0px 0px 4px #000000;">
                        
                            <form action="{{ url('/frase/'.$frase->id) }}" method="post">
                                @csrf
                                {{ method_field('addSlider') }}
                                <input type="submit"  onclick="return confirm('Phrase will be added to slider.')" class="btn btn-light" style="color: #9121DB" value="Add to Slider">
                            </form>
                        
                        </li>
                        <li class="nav-item" style="shadow: 0px 0px 4px #000000;">
                            <a href="{{ url('/frase/'.$frase->id.'/edit') }}" class="btn btn-outline-light" style="color: white; text-shadow: 0px 0px 4px #000000;">Update</a>
                        </li>
                        <li class="nav-item" style="shadow: 0px 0px 4px #000000;">
                            <form action="{{ url('/frase/'.$frase->id) }}" method="patch">
                                @csrf
                                {{ method_field('delete') }}
                                <input type="submit"  onclick="return confirm('Please confirm deletion.')" class="btn btn-primary" value="Delete">
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </main>
</div>
<div class="container d-flex mt-4 justify-content-center">
    {{ $frases->links('pagination::bootstrap-4') }}
</div>
@endsection