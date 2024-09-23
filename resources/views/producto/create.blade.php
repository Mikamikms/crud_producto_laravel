@extends('layouts.layout')

@section('title', 'Crear Producto')

@section('content')
<h1>Crear Producto</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('producto.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <select class="form-control" id="marca" name="marca_id">
            <option value="" selected disabled>Seleccionar...</option>
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-control" id="categoria" name="categoria_id">
            <option value="" selected disabled>Seleccionar...</option>
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="unidad_de_medida" class="form-label">Unidad de Medida</label>
        <select class="form-control" id="unidad_de_medida" name="unidad_de_medida_id">
            <option value="" selected disabled>Seleccionar...</option>
            @foreach($unidadDeMedidas as $unidad)
                <option value="{{ $unidad->id }}">{{ $unidad->nombre }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="precio_compra" class="form-label">Precio de Compra</label>
        <input type="number" class="form-control" id="precio_compra" name="precio_compra"  step="0.01" min="0" value="{{ old('precio_compra') }}">
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio de Venta</label>
        <input type="number" class="form-control" id="precio_venta" name="precio_venta" step="0.01" min="0" value="{{ old('precio_venta') }}">
    </div>
    <button type="submit" class="btn btn-success">Guardar</button>
    <a href="{{ route('producto.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
