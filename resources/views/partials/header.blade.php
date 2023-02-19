<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.scss') }}" rel="stylesheet">
    <title>Inspirate</title>
</head>
<body>
    <header>
        <div class="px-3 py-2 bg-danger bg-gradient text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="{{ route('home') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img src="{{URL::asset('/imgs/logo1-remove.png')}}" alt="logo" width="220" height="125">
              </a>

              <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                <li>
                  <a href="{{ route('home') }}" class="nav-link text-white">
                    <img src="{{URL::asset('/imgs/house.svg')}}" alt="logo" class="bi d-block mx-auto mb-1" width="24" height="24">
                    Home
                  </a>
                </li>
                <li>
                  <a href="{{ route('dashboard') }}" class="nav-link text-white">
                    <img src="{{URL::asset('/imgs/dashboard.svg')}}" alt="logo" class="bi d-block mx-auto mb-1" width="24" height="24">
                    Dashboard
                  </a>
                </li>
              </ul> 
            </div>
          </div>
        </div>
           
        <div class="px-3 py-2 border-bottom mb-3">
          <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto">
              <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            <div class="text-end">
              <ul class="navbar-nav flex-row ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li type="button" style="color: #9121DB;" class="nav-item" >
                            <a class="btn btn-light text-dark me-2" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li type="button" class="nav-item">
                            <a class="btn btn-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
            
            </div>
          </div>
        </div>  
    </header>