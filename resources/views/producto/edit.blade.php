@extends('layouts.layout')

@section('title', 'Editar Producto')

@section('content')
<h1>Editar Producto</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('producto.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $producto->nombre) }}">
    </div>
    <div class="mb-3">
        <label for="marca" class="form-label">Marca</label>
        <select class="form-control" id="marca" name="marca_id">
            @foreach($marcas as $marca)
                <option value="{{ $marca->id }}" {{ $marca->id == $producto->marca_id ? 'selected' : '' }}>
                    {{ $marca->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="categoria" class="form-label">Categoría</label>
        <select class="form-control" id="categoria" name="categoria_id">
            @foreach($categorias as $categoria)
                <option value="{{ $categoria->id }}" {{ $categoria->id == $producto->categoria_id ? 'selected' : '' }}>
                    {{ $categoria->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="unidad_de_medida" class="form-label">Unidad de Medida</label>
        <select class="form-control" id="unidad_de_medida" name="unidad_de_medida_id">
            @foreach($unidadDeMedidas as $unidad)
                <option value="{{ $unidad->id }}" {{ $unidad->id == $producto->unidad_de_medida_id ? 'selected' : '' }}>
                    {{ $unidad->nombre }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="precio_compra" class="form-label">Precio de Compra</label>
        <input type="number" class="form-control" id="precio_compra" name="precio_compra" step="0.01" min="0" value="{{ old('precio_compra', $producto->precio_compra) }}">
    </div>
    <div class="mb-3">
        <label for="precio_venta" class="form-label">Precio de Venta</label>
        <input type="number" class="form-control" id="precio_venta" name="precio_venta" step="0.01" min="0" value="{{ old('precio_venta', $producto->precio_venta) }}">
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('producto.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
