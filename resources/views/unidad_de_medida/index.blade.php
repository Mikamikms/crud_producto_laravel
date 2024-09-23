@extends('layouts.layout')

@section('title', 'Unidades de Medida')

@section('content')
<div class="d-flex justify-content-between mb-3">
    <h1>Unidades de Medida</h1>
    <a href="{{ route('unidad_de_medida.create') }}" class="btn btn-primary">Crear Nueva Unidad</a>
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
            @foreach($unidadDeMedidas as $unidadDeMedida)
            <tr>
                <td>{{ $unidadDeMedida->id }}</td>
                <td>{{ $unidadDeMedida->nombre }}</td>
                <td>
                    <a href="{{ route('unidad_de_medida.edit', $unidadDeMedida->id) }}" class="btn btn-warning btn-sm">Editar</a>
                    <form action="{{ route('unidad_de_medida.destroy', $unidadDeMedida->id) }}" method="POST" style="display:inline;">
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
        <span>Total: {{ $unidadDeMedidas->total() }} unidades de medidas</span>
    </div>
    <nav aria-label="Page navigation">
        {{ $unidadDeMedidas->links('vendor.pagination.bootstrap-5') }}
    </nav>
</div>

<style>
    .table th, .table td {
        text-align: center;
        width: 33.33%;
    }
</style>
@endsection
