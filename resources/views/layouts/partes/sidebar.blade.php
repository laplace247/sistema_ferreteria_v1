  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ $active == 1 ? 'active' : '' }}" href="{{ route('home') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed {{ $active == 2 || $active == 3 ? 'active' : '' }}" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#}}">
          <i class="bi bi-basket"></i><span>Inventario</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse {{ $active == 2 || $active == 3 ? 'show' : '' }}" data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{ route('articulos.index') }}" class="{{ $active == 2 ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Artículos</span>
            </a>
          </li>
            <a href="{{ route('categorias.index') }}" class="{{ $active == 3 ? 'active' : '' }}">
              <i class="bi bi-circle"></i><span>Categorías</span>
            </a>
          </li>
        </ul>
      </li><!-- End Inventario Nav -->
      <li class="nav-item">
        <a class="nav-link {{ $active == 4 ? 'active' : '' }}" href="#">
          <i class="bi bi-cart-plus"></i>
          <span>Compras</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link {{ $active == 5 ? 'active' : '' }}" href="#">
          <i class="bi bi-cash"></i>
          <span>Ventas</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->