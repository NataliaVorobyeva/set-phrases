@include('header')
<h2>Dashboard del adminstrador</h2>
@include('carrousel')
<ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">Active</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Frases</a>
      <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#">Agregar</a></li>
        <li><a class="dropdown-item" href="#">Editar</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Agregar al carrusel</a></li>
      </ul>
    </li>
  </ul>
  <h2>Contenedor de frases</h2>

@include('footer')