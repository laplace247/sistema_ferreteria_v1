<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="/home">MiFerre</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('home') }}">Menu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Articulos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Categorias</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Egresos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Ingresos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Ventas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('articulos.index') }}">Cerrar sesion</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</header>