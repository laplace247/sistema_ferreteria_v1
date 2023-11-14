@extends('layouts.app')    
@section('content')

<script type="module">
    
    import {bootbox_confirm,bootbox_alert} from '/utils/dialog.js'

    async function confirmaEliminararticulo(e,articulo) {
        e.preventDefault();
        let form=e.target;
        
        let dni=articulo.dni;
        let nombres=articulo.nombres+" "+articulo.apellidos;
        
        let resultado=await bootbox_confirm("DNI: "+dni+"<br>NOMBRES: "+nombres+"<br>¿Estás seguro de que deseas eliminar este elemento?");
        if(resultado==true){

            form.submit();
        }
    }
    function mensajeDeControlador(mensaje){

        bootbox_alert(mensaje);
    }

    window.confirmaEliminararticulo = confirmaEliminararticulo;
    window.mensajeDeControlador = mensajeDeControlador;

</script>
<div class="container articulos">
    <h2>Listado de Articulos</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>#</th>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio de venta</th>
                <th>Precio de compra</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($articulos as $key => $articulo)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $articulo->codigo }}</td>
                <td>{{ $articulo->nombre }}</td>
                <td>{{ $articulo->precio_venta }}</td>
                <td>{{ $articulo->precio_compra }}</td>
                <td>
                    
                    <form action="{{ route('articulos.show', $articulo->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-primary">Ver</button>
                    </form>

                    <form action="{{ route('articulos.edit', $articulo->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>
                    <form onsubmit='window.confirmaEliminararticulo(event, @json($articulo))' action="{{ route('articulos.destroy', $articulo->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

        <a href="{{ route('home') }}" class="btn btn-primary"><i class="bi bi-house-fill" style="margin-right: 10px"></i>Home</a>
        <a href="{{ route('articulos.create') }}" class="btn btn-success"><i class="bi bi-file-plus-fill" style="margin-right: 10px"></i>Agregar</a>
    
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