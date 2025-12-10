@extends('layouts.app')

@section('title', 'Listado de Productos')

@section('content')
    <h2>Listado de Productos</h2>

    @if($articulos->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <table>
            <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Fecha</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach($articulos as $articulo)
                <tr>
                    <td>{{ $articulo->id }}</td>
                    <td>{{$articulo->title}}</td>
                    <td>{{ Str::limit($articulo->body, 50) }}</td>
                    <td>{{$articulo->date}}</td>
                    <td>
                        <a href="{{ route('articulos.show', $articulo) }}" class="btn btn-primary">
                            Ver artículo
                        </a>
                        <a href="{{ route('articulos.edit', $articulo) }}" class="btn btn-primary" >
                            Editar articulo
                        </a>
                        <form action="{{ route('articulos.destroy', $articulo) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('¿Seguro que quieres eliminar este producto?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn" style="background-color:#c0392b;">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
@endsection
