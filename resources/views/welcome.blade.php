@extends('layouts.app')


@section('content')
    @include('partials.carrousel')
    <hr class="featurette-divider">
    <main class="d-flex justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 grid justify-content-center gap-4 ">
            @foreach ($frases as $frase)
                
                <div class="card-group col-10 col-lg-3 col-md-4 text-white" style="filter: drop-shadow(0px 4px 4px rgba(145, 33, 219, 0.5)); border: 2px solid #9121DB; border-radius: 8px; padding: 0; overflow: hidden;">
                    <img class=" w-100" src="{{$frase->image}}" alt="Background image">
                    <div class="card-img-overlay overflow-y-scroll m-4" style="text-shadow: 0px 0px 4px #000000;">
                        <h5 class="card-title fw-bolder mb-2" >{{$frase->text}}</h5>
                        <p class="card-text m-0">{{$frase->author}}</p>
                    </div>
                </div>

            @endforeach
            
        </div>
        
    </main>
    <div class="container d-flex mt-4 justify-content-center">
        {{ $frases->links('pagination::bootstrap-4') }}
    </div>
@endsection

