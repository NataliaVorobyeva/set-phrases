@extends('layouts.auth-template')

@section('content')
<div class="container d-flex flex-wrap justify-content-center">

    <ul class="nav nav-pills mb-4">
        <li class="nav-item">
          <a class="btn btn-outline-primary me-2 " aria-current="page" href="{{ route('home-user') }}">Quotes</a>
        </li>
        <li class="nav-item">
            <a class="btn btn-primary" aria-current="page" href="{{ route('like') }}">Likes</a>
          </li>
    </ul>

    <main class="d-flex justify-content-center">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-auto grid justify-content-center gap-4">

            @foreach ($frases as $frase)
                <div class="card-group col-10 col-lg-3 col-md-4 text-white" style="filter: drop-shadow(0px 4px 4px rgba(145, 33, 219, 0.5)); border: 2px solid #9121DB; border-radius: 8px; padding: 0; overflow: hidden;">
                    <img class="card-img w-100" src="{{$frase->image}}" alt="Background image">
                    <div class="card-img-overlay overflow-y-scroll m-4 mt-2" style="text-shadow: 0px 0px 4px #000000;">
                        <a class="" href="{{ route('home-user',$frase->id) }}" > 
                            <img src="{{URL::asset('/imgs/hearth-full.svg')}}" alt="logo" class="bi d-block mx-auto" width="35" height="35"> 
                        </a>
                        <h5 class="card-title fw-bolder mb-2" >{{$frase->text}}</h5>
                        <p class="card-text m-0">{{$frase->author}}</p>
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
