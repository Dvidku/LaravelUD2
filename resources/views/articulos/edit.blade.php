@extends('layouts.app')

@section('title', 'Editar Producto')

@section('content')
    <h2>Editar Producto #{{ $articulo->id }}</h2>

    @if($errors->any())
        <ul class="errors-list">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('articulos.update', $articulo) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="title">Nombre *</label>
            <input type="text" id="title" name="title" value="{{ old('title', $articulo->title) }}" required maxlength="255" />
        </div>

        <div>
            <label for="body">Descripción</label>
            <textarea id="body" name="body" rows="4">{{ old('body', $articulo->body) }}</textarea>
        </div>

        <input type="date" id="date" name="date"
               value="{{ old('date', $articulo->date) }}"
               required
               style="width: 300px;" />

        <input type="submit" value="Actualizar Producto" />
        <a href="{{ route('articulos.index') }}" class="btn" style="background-color: #7f8c8d; margin-left: 10px;">Cancelar</a>
    </form>
@endsection
