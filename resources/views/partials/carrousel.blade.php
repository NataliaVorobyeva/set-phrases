
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <div class="carousel-inner" >

      <div class="carousel-item active" style="height: 200px">
        <img src="{{URL::asset('/imgs/fondo-exemple.webp')}}" class="d-block w-100" alt="Background image">
          <div class="carousel-caption text-start flex align-content-center justify-content-center" style="text-shadow: 0px 0px 4px #000000;">
            <h3 class="fw-bolder">“Los grandes actos se componen de pequeñas obras hechas día a día.”</h3>
            <p>Lao Tzu</p>
          </div>
      </div>

      <div class="carousel-item" style="height: 200px">
        <img src="{{URL::asset('/imgs/fondo-exemple.webp')}}" class="d-block w-100" alt="Background image">
          <div class="carousel-caption text-start flex align-content-center justify-content-center" style="text-shadow: 0px 0px 4px #000000;">
            <h3 class="fw-bolder">“No te dejes intimidar por lo que no sabes. Esa puede ser tu mayor fortaleza y asegúrate de hacer las cosas de manera diferente a todos los demás.”</h3>
            <p>Sara Blakely</p>
          </div>
      </div>
      
      <div class="carousel-item" style="height: 200px">
        <img src="{{URL::asset('/imgs/fondo-exemple.webp')}}" class="d-block w-100" alt="Background image">
          <div class="carousel-caption  text-start flex align-content-center justify-content-center" style="text-shadow: 0px 0px 4px #000000;">
            <h3 class="fw-bolder">“Haz de cada día tu obra maestra.”</h3>
            <p>Jhon Wooden</p>
          </div>
      </div>

    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>