@extends('layouts.app')

@php
    $active = 2;
@endphp

@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-basket"></i> Artículos</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Artículos</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body" id="datatable-contain">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Listado de artículos
                            <a href="{{ route('articulos.create') }}" class="btn btn-success"><i class="bi bi-plus-circle-fill" style="margin-right: 10px"></i>Nuevo artículo</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Categoría</th>
                                    <th scope="col">Código</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Precio de venta</th>
                                    <th scope="col">Precio de compra</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articulos as $key => $articulo)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $articulo->categoria->nombre }}</td>
                                        <td>{{ $articulo->codigo }}</td>
                                        <td>{{ $articulo->nombre }}</td>
                                        <td>S/. {{ $articulo->precio_venta }}</td>
                                        <td>S/. {{ $articulo->precio_compra }}</td>
                                        <td>
                                            <div class="actions-buttons">
                                                <div>
                                                    <a href="{{ route('articulos.show', ['idArticulo' => $articulo->id]) }}" class="btn btn-primary">
                                                        <i class="bi bi-eye"></i>
                                                    </a>
                                                </div>
                            
                                                {{-- <form action="{{ route('articulos.edit', $articulo->id) }}" method="GET" style="display: inline;">
                                                    @csrf --}}
                                                <a href="{{ route('articulos.edit', ['idArticulo' => $articulo->id]) }}" class="btn btn-warning">
                                                    <i class="bi bi-pencil"></i>
                                                </a>
                                                {{-- </form> --}}
                                                <form onsubmit='window.confirmaEliminararticulo(event, @json($articulo))' action="#" method="POST" style="display: inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
