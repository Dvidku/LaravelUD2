<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function index(){
        $articulos = Article::all();
        return view('articulos.index', ['articulos' => $articulos]);
    }
    public function show(Article $articulo){
        return view('articulos.show',['articulo' => $articulo]);
    }

    public function edit(Article $articulo){
        return view('articulos.edit',['articulo' => $articulo]);
    }
    public function update(Request $request, Article $articulo)
    {
        // Validar los datos
        $request->validate([
            'title' => 'required|max:75',
            'body' => 'required|max:75',
            'date' => 'required|date',
        ]);

        // Actualizar el artículo
        $articulo->update([
            'title' => $request->title,
            'body' => $request->body,
            'date' => $request->date,
        ]);

        // Redireccionar con mensaje de éxito
        return redirect()->route('articulos.show', $articulo)
            ->with('success', 'Artículo actualizado correctamente');
    }

    public function destroy(Article $articulo){
        $articulo->delete();
        return redirect()->route('articulos.index')
            ->with('success', 'Artículo borrado correctamente');
    }

}




