    <header>
        <div class="px-3 py-2 bg-danger bg-gradient text-white">
          <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
              <a href="{{ route('welcome') }}" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                <img src="{{URL::asset('/imgs/logo1-remove.png')}}" alt="logo" width="220" height="125">
              </a>

        <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
          <li>
            <a href="{{ route('welcome') }}" class="nav-link text-white">
              <img src="{{URL::asset('/imgs/house.svg')}}" alt="logo" class="bi d-block mx-auto mb-1" width="24" height="24">
              Home
            </a>
          </li>
          <li>
<<<<<<< HEAD
     
            <a href="{{ route('home-user') }}" class="nav-link text-white">
            
=======
            <a href="{{ route('home-user') }}" class="nav-link text-white">
>>>>>>> 6deb90409881d28becd2671586a10ae36e27be29
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
                  <li type="button" class="nav-item">
                      <a class="btn btn-outline-primary me-2 " href="{{ route('login') }}">{{ __('Login') }}</a>
                  </li>
              @endif

              @if (Route::has('register'))
                  <li type="button" class="nav-item" >
                      <a class="btn btn-primary" href="{{ route('register') }}">{{ __('Register') }}</a>
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