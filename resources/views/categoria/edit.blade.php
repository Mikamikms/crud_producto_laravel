@extends('layouts.layout')

@section('title', 'Editar Categoría')

@section('content')
<h1>Editar Categoría</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categoria.update', $categoria->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $categoria->nombre) }}">
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
