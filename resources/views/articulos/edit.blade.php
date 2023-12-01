@extends('layouts.app')    
@section('content')
<script type="module">
    
    import {bootbox_confirm,bootbox_alert} from '/utils/dialog.js'

    function mensajeDeControlador(mensaje){

        bootbox_alert(mensaje);
    }

    window.mensajeDeControlador = mensajeDeControlador;

</script>
<div class="container">
        <h2>Editar Articulo</h2>
        <form method="POST" action="{{ route('articulos.update', $alumno->id) }}">
            @csrf
            @method('PUT') <!-- Utiliza PUT para la actualización -->
            <div class="form-group">
                <label for="nombres">Codigo</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ $alumno->dni }}" required>
            </div>
            <div class="form-group">
                <label for="nombres">Precio de Venta</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $alumno->nombres }}" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Precio de Compra</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Precio de Compra</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $alumno->apellidos }}" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <button type="button" class="btn btn-secondary">Volver</button>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('articulos.index') }}" class="btn btn-danger">Cancelar</a>
</div>
{{-- Manejo de mensajes de error--}}
@if(session('mensaje'))
<script>
    var mensaje="{{ session('mensaje') }}";
    window.addEventListener('load', (event) => {
        window.mensajeDeControlador(mensaje);
    });
</script>
@endif
@if(isset($mensaje))
<script>
    var mensaje="{{ $mensaje }}";
    window.addEventListener('load', (event) => {
        window.mensajeDeControlador(mensaje);
    });
</script>
@endif
@endsection