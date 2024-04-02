@extends('layouts.app')

@php
    $active = 3;
@endphp

@section('content')
    <div class="pagetitle">
        <h1><i class="bi bi-basket"></i> Categorías</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Categorías</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body" id="datatable-contain">
                        <h5 class="card-title d-flex justify-content-between align-items-center">
                            Listado de categorías
                            <a href="{{ route('categorias.create') }}" class="btn btn-success"><i class="bi bi-plus-circle-fill" style="margin-right: 10px"></i>Nueva categoría</a>
                        </h5>
                        <!-- Table with stripped rows -->
                        <table class="table datatable" id="datatable">
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Nombre</th>
                                    <th scope="col">Descripción</th>
                                    <th scope="col">Fecha de creación</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorias as $key => $categoria)
                                    <tr>
                                        <th scope="row">{{ $key + 1 }}</th>
                                        <td>{{ $categoria->nombre }}</td>
                                        <td>{{ $categoria->descripcion }}</td>
                                        <td>{{ $categoria->created_at }}</td>
                                        <td>
                                            <div class="actions-buttons">
                                                <a href="{{ route('categorias.edit', ['idCategoria' => $categoria->id]) }}" class="btn btn-warning {{ $categoria->id == 1 ? 'btn-edit-link' : '' }}"><i class="bi bi-pencil-square"></i></a>
                                                <form action="#" method="POST">
                                                    @csrf
                                                    <button type="submit" class="btn btn-danger {{ $categoria->id == 1 ? 'btn-edit-link' : '' }}"><i class="bi bi-trash"></i></button>
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