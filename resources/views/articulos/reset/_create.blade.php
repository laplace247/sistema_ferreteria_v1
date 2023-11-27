@extends('layouts.app')    
@section('content')
<script type="module">
    
    import {bootbox_confirm,bootbox_alert} from '/utils/dialog.js'

    function mensajeDeControlador(mensaje){

        bootbox_alert(mensaje);
    }

    window.mensajeDeControlador = mensajeDeControlador;

</script>
<div class="pagetitle">
    <h1>Articulos</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Nuevo Articulo</li>
        </ol>
    </nav>
</div><!-- End Page Title -->

<div class="container">
        <h2>Crear Articulo</h2>
        <form method="POST" action="{{ route('articulos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombres">Dni</label>
                <input type="text" class="form-control" id="dni" name="dni" @if(isset($alumno->dni)) value="{{$alumno->dni}}" @endif required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" @if(isset($alumno->nombres)) value="{{$alumno->nombres}}" @endif required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" @if(isset($alumno->apellidos)) value="{{$alumno->apellidos}}" @endif required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('articulos.index') }}" class="btn btn-danger">Cancelar</a>
        </form>
        </form>
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