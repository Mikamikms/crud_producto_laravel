@extends('layouts.layout')

@section('title', 'Editar Marca')

@section('content')
<h1>Editar Marca</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('marca.update', $marca->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $marca->nombre) }}">
    </div>
    <button type="submit" class="btn btn-success">Actualizar</button>
    <a href="{{ route('marca.index') }}" class="btn btn-secondary">Cancelar</a>
</form>
@endsection
