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

    <div class="container d-flex justify-content-around">

        @foreach ($frases as $frase)
            <div class="card col-12 col-lg-4 col-md-6 text-white border-primary" style="filter: drop-shadow(0px 4px 4px rgba(145, 33, 219, 0.5));">
                <img class="card-img fit-content p-0 m-0 w-100" src="{{$frase->image}}" alt="Background image">
                <div class="card-img-overlay overflow-y-scroll" style="text-shadow: 0px 0px 4px #000000;">
                    <h5 class="card-title fw-bolder" >{{$frase->text}}</h5>
                    <p class="card-text">{{$frase->author}}</p>
                    <a class="" {{-- onclick="add({{ $res->driver_id }});" --}}role="button" > 
                        <img src="{{URL::asset('/imgs/hearth.svg')}}" alt="logo" class="bi d-block mx-auto" width="35" height="35"> 
                    </a>
                </div>
            </div>
        @endforeach

    </div>

</div>
<div class="container d-flex mt-4 justify-content-center">
    {{ $frases->links('pagination::bootstrap-4') }}
</div>
@endsection
