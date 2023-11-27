@extends('layouts.app')    
@section('content')
<div class="pagetitle">
    <h1>Articulos</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Nuevo Articulo</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
      <h5 class="card-title">Registrar Articulo</h5>

      <!-- Multi Columns Form -->
      <form class="row g-3">
        <div class="col-md-12">
          <label for="inputName5" class="form-label">Nombre del producto</label>
          <input type="text" class="form-control" id="inputName5">
        </div>
        <div class="col-md-6">
          <label for="inputEmail5" class="form-label">Precio de venta</label>
          <input type="email" class="form-control" id="inputEmail5">
        </div>
        <div class="col-md-6">
          <label for="inputPassword5" class="form-label">Precio de compra</label>
          <input type="password" class="form-control" id="inputPassword5">
        </div>
        <div class="col-12">
          <label for="inputAddress5" class="form-label">Descripcion</label>
          <textarea type="text" class="form-control" id="inputAddres5s" placeholder="1234 Main St"> </textarea>
        </div>
        <div class="col-md-4">
            <label for="inputZip" class="form-label">Codigo</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
        <div class="col-md-4">
          <label for="inputZip" class="form-label">Stock</label>
          <input type="text" class="form-control" id="inputZip">
        </div>
        <div class="col-md-4">
            <label for="inputState" class="form-label">Categoria</label>
            <select id="inputState" class="form-select">
              <option selected>Option...</option>
              <option>...</option>
            </select>
          </div>
        <div class="text-center">
          <button type="submit" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary">Volver</button>
        </div>
      </form><!-- End Multi Columns Form -->

    </div>
  </div>
@endsection