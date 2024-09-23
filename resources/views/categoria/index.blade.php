@extends('layouts.layout')

@section('title', 'categoria')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>categorías</h1>
    <a href="{{ route('categoria.create') }}" class="btn btn-primary">Crear Nueva categoría</a>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>
                    <a href="{{ route('categoria.edit', $categoria->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('categoria.destroy', $categoria->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div class="d-flex justify-content-between align-items-center mt-3">
    <div>
        <span>Total: {{ $categorias->total() }} categorías</span>
    </div>
    <nav aria-label="Page navigation">
        {{ $categorias->links('vendor.pagination.bootstrap-5') }} <!-- Asegúrate de usar la vista de Bootstrap 5 -->
    </nav>
</div>

<style>
    .table th, .table td {
        text-align: center;
        width: 33.33%;
    }
</style>
@endsection
