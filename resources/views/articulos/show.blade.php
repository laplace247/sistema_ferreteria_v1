@extends('layouts.app')    
@section('content')
<div class="container">
        <h2>Detalles del Articulo</h2>
        <p><strong>ID:</strong> {{ $articulo->id }}</p>
        <p><strong>Codigo:</strong> {{ $articulo->codigo }}</p>
        <p><strong>Nombre:</strong> {{ $articulo->nombre }}</p>
        <p><strong>Categoria:</strong> {{ $articulo->categoria }}</p>
        <p><strong>Stock:</strong> {{ $articulo->stock }}</p>
        <a href="{{ route('articulos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection