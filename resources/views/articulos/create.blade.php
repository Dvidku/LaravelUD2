@extends('layouts.app')

@section('title', 'Crear Producto')

@section('content')
    <h2>Crear Nuevo Producto</h2>

    @if($errors->any())
        <ul class="errors-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('articulos.store') }}" method="POST">
        @csrf

        <div>
            <label for="title">Nombre *</label>
            <input type="text" id="title" name="title" value="{{ old('name') }}" required maxlength="255" />
        </div>

        <div>
            <label for="body">Descripción</label>
            <textarea id="body" name="body" rows="4">{{ old('body') }}</textarea>
        </div>

        <label for="date">Fecha de Nacimiento:</label>
        <input type="date" id="date" name="date">

        <input type="submit" value="Guardar Producto" />
        <a href="{{ route('articulos.index') }}" class="btn" style="background-color: #7f8c8d; margin-left: 10px;">Cancelar</a>
    </form>
@endsection
