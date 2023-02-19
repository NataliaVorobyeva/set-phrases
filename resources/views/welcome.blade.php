@extends('layouts.app')


@section('content')
    @include('partials.carrousel')
    <hr class="featurette-divider">
    <main class="container justify-content-around">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 ">
            @foreach ($frases as $frase)
                
            <div class="col card text-white shadow m-3">
                <img class="card-img object-fit-cover" src="{{$frase->image}}" alt="Background image">
                <div class="card-img-overlay overflow-y-scroll">
                <h4 class="card-title fw-bolder shadow-sm">{{$frase->text}}</h4>
                <p class="card-text shadow-sm">{{$frase->author}}</p>
                </div>
            </div>

            @endforeach
            
        </div>

        @endforeach 
        
    </main>
    <div class="container d-flex mt-4 justify-content-center">
        {{ $frases->links('pagination::bootstrap-4') }}
    </div>
@endsection

