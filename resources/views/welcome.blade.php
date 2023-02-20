@extends('layouts.app')


@section('content')
    @include('partials.carrousel')
    <hr class="featurette-divider">
    <main class="d-flex justify-content-center">
        <div class="row grid justify-content-center gap-4">
            @foreach ($frases as $frase)
                
                <div class="card col-lg-4 col-md-12 text-white border-primary" style="filter: drop-shadow(0px 4px 4px rgba(145, 33, 219, 0.5));">
                    <img class="card-img fit-content" src="{{$frase->image}}" alt="Background image">
                    <div class="card-img-overlay overflow-y-scroll" style="text-shadow: 0px 0px 4px #000000;">
                        <h5 class="card-title fw-bolder" >{{$frase->text}}</h5>
                        <p class="card-text">{{$frase->author}}</p>
                    </div>
                </div>

            @endforeach
            
        </div>
        
    </main>
    <div class="container d-flex mt-4 justify-content-center">
        {{ $frases->links('pagination::bootstrap-4') }}
    </div>
@endsection

