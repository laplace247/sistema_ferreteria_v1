@extends('layouts.app')

@php
        $active = 2;
@endphp

@section('content')
<div class="container">
        <div class="pagetitle">
                <h1><i class="bi bi-eye"></i> <span>Detalles del artículo: </span>{{ $articulo->nombre }}</h1>
                <nav>
                        <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('articulos.index') }}">Artículos</a></li>
                        <li class="breadcrumb-item active">Detalles de artículo</li>
                        </ol>
                </nav>
        </div>
        <div class="card">
                <div class="card-body">
                        <div class="details-article">
                                <p><strong>ID:</strong> {{ $articulo->id }}</p>
                                <p><strong>Código:</strong> {{ $articulo->codigo }}</p>
                                <p><strong>Nombre:</strong> {{ $articulo->nombre }}</p>
                                <p><strong>Categoría:</strong> {{ $articulo->categoria->nombre }}</p>
                                <p><strong>Stock:</strong> {{ $articulo->stock }}</p>
                                <p><strong>Descripción:</strong> {{ $articulo->descripcion }}</p>
                                
                        </div>
                        <div class="text-center">
                                <a href="{{ route('articulos.index') }}" class="btn btn-primary btn-pm"><i class="bi bi-arrow-left-circle-fill"></i>&nbsp;&nbsp;Volver</a>
                        </div>
                </div>
        </div>
</div>
@endsection