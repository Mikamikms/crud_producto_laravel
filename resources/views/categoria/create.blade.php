@extends('layouts.layout')

@section('title', 'Crear Categoría')

@section('content')

<h1>Crear Categoría</h1>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('categoria.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre') }}">
    </div>
    <button class="btn btn-success">Guardar</button>
    <a href="{{ route('categoria.index') }}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection
