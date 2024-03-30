@extends('layouts.app')

@php
    $active = 2;
@endphp

@section('content')
<div class="pagetitle">
    <h1><i class="bi bi-pencil"></i> Actualizar artículo</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item"><a href="{{ route('articulos.index') }}">Artículos</a></li>
            <li class="breadcrumb-item active">Actualizar artículo</li>
        </ol>
    </nav>
</div><!-- End Page Title -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Detalles del artículo</h5>

        <!-- Multi Columns Form -->
        <form class="row g-3 row-p" method="POST" action="#" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <label for="nombre" class="form-label">Nombre del artículo</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $articulo->nombre }}">
            </div>
            <div class="col-md-6">
                <label for="precioventa" class="form-label">Precio de venta</label>
                <input type="text" class="form-control" id="precioventa" name="precioventa"value="{{ $articulo->precio_venta }}">
            </div>
            <div class="col-md-6">
                <label for="preciocompra" class="form-label">Precio de compra</label>
                <input type="text" class="form-control" id="preciocompra" name="preciocompra"value="{{ $articulo->precio_compra }}">
            </div>
            <div class="col-12">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea type="text" class="form-control" id="descripcion" name="descripcion">{{ $articulo->descripcion }}</textarea>
            </div>
            <div class="col-md-4">
                <label for="codigo" class="form-label">Código</label>
                <input type="text" class="form-control" id="codigo" name="codigo"value="{{ $articulo->codigo }}">
            </div>
            <div class="col-md-4">
                <label for="stock" class="form-label">Stock</label>
                <input type="text" class="form-control" id="stock" name="stock"value="{{ $articulo->stock }}">
            </div>
            <div class="col-md-4">
                <label for="categoria_id" class="form-label">Categoría</label>
                <select id="categoria_id" class="form-select" name="categoria_id">
                @foreach ($categorias as $categoria)
                    <option {{ $articulo->categoria->id == $categoria->id ? 'selected' : '' }} value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
                </select>
            </div>
            <div class="col-12">
                <label for="imagen" class="form-label">Imagen</label>
                <input type="file" class="form-control" id="imagen" name="imagen" />
            </div>
            <div class="confirm-register">
                <button type="submit" class="btn btn-primary btn-p"><i class="bi bi-check-circle-fill"></i>&nbsp;&nbsp;Actualizar artículo</button>
                <a href="{{ route('articulos.index') }}" class="btn btn-secondary btn-p"><i class="bi bi-arrow-left-circle-fill"></i>&nbsp;&nbsp;Volver</a>
            </div>
        </form><!-- End Multi Columns Form -->

        </div>
    </div>
@endsection