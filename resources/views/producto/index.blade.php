@extends('layouts.layout')

@section('title', 'Productos')

@section('content')

<div class="d-flex justify-content-between mb-3">
    <h1>Productos</h1>
    <a href="{{ route('producto.create') }}" class="btn btn-primary">Crear Nuevo Producto</a>
</div>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="table-responsive">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Categoría</th>
                <th>Unidad de Medida</th>
                <th>Precio de Compra</th>
                <th>Precio de Venta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
                <tr>
                    <td>{{ $producto->id }}</td>
                    <td>{{ $producto->nombre }}</td>
                    <td>{{ $producto->marca->nombre }}</td>
                    <td>{{ $producto->categoria->nombre }}</td>
                    <td>{{ $producto->unidadDeMedida->nombre }}</td>
                    <td>{{ $producto->precio_compra }}</td>
                    <td>{{ $producto->precio_venta }}</td>
                    <td>
                        <a href="{{ route('producto.edit', $producto->id) }}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('producto.destroy', $producto->id) }}" method="POST" style="display:inline;">
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
        <span>Total: {{ $productos->total() }} productos</span>
    </div>
    <nav aria-label="Page navigation">
        {{ $productos->links('vendor.pagination.bootstrap-5') }} <!-- Usar la vista de Bootstrap 5 -->
    </nav>
</div>


@endsection