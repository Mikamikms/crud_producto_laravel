@extends('layouts.layout')

@section('title', 'Editar Unidad de Medida')

@section('content')
<h1>Editar Unidad de Medida</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('unidad_de_medida.update', $unidadDeMedida->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $unidadDeMedida->nombre) }}">
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('unidad_de_medida.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
