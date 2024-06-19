<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Validator;


use Illuminate\Http\Request;

class categoriasController extends Controller
{
    public function index()
    {
        $categorias = categorias::all();
        return view('categorias.index', compact('categorias'));
    }
    public function create()
    {
        $categorias = categorias::all();
        return view('categorias.create', compact('categorias'));
    }
    public function show($id)
    {
        $categoria = categorias::find($id);
        return view('categorias.show', ['categorias' => $categoria]);
    }
    public function update(Request $request, $id)
    {
        $categoria = categorias::find($id);
        $categoria->titulo = $request->titulo;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();
        return redirect()->route('categorias')->with('success', 'Categorias Actualizado Correctamente');
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'titulo' => 'required|min:2',
                'descripcion' => 'required|min:3',
            ]
        );
        $categoria = new categorias;
        $categoria->titulo = $request->titulo;
        $categoria->descripcion = $request->descripcion;
        $categoria->save();

        return redirect()->route('categorias')->with('success', 'La categoría se ha guardado Exitosamente');
    }
    public function destroy($id)
    {
        $categorias = categorias::find($id);
        $categorias->delete();
        return redirect()->route('categorias')->with('success', 'Categoría borrada Exitosamente');
    }

}
