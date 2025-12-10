@extends('layouts.app')

@section('title', 'Detalle Producto')

@section('content')
    <h2>Producto: {{ $articulo->name }}</h2>

    <p><strong>ID:</strong> {{ $articulo->id }}</p>
    <p><strong>Descripción:</strong></p>
    <p style="white-space: pre-line;">{{ $articulo->body ?: 'Sin descripción' }}</p>
    <a href="{{ route('articulos.edit', $articulo) }}" class="btn">Editar</a>
    <form action="{{ route('articulos.destroy', $articulo) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que quieres eliminar este producto?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn" style="background-color:#c0392b;">Eliminar</button>
    </form>
    <a href="{{ route('articulos.index') }}" style="margin-left:10px;">Volver al listado</a>
@endsection
