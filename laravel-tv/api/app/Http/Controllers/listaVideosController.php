<?php

namespace App\Http\Controllers;

use App\Models\listaVideos;
use App\Models\imagenes;
use App\Models\categorias;


use Illuminate\Http\Request;

class listaVideosController extends Controller
{
    //
    
    public function index()
    {
        $targetas = listaVideos::obtener_targetas();
        return view('listaVideos.index', compact('targetas'));
       
    }
    public function create()
    {
        $imagenes = imagenes::all();
        $categorias = categorias::all();
        return view('listaVideos.create',  ['imagenes' => $imagenes, 'categorias' => $categorias]);
    }
    public function show($id)
    {
        $targetas = listaVideos::find($id);
        $imagenes = imagenes::all();
        $categorias = categorias::all();
        return view('listaVideos.show', ['targetas' => $targetas, 'imagenes' => $imagenes, 'categorias' => $categorias]);
    }
     public function update(Request $request, $id)
     {
        $targeta = listaVideos::find($id);
        $targeta->titulo = $request->titulo;
        $targeta->id_categoria = $request->id_categoria;
        $targeta->id_imagenes = $request->id_imagenes;
        $targeta->visible = $request->visible;
        $targeta->destacado = $request->destacado;
        $targeta->save();
        return redirect()->route('listaVideos')->with('success', 'La tarjeta se ha Actualizado Correctamente');
        
     }
    public function store(Request $request)
    {
        $targetas = new listaVideos;
        $targetas->titulo = $request->titulo;
        $targetas->id_categoria = $request->id_categoria;
        $targetas->id_imagenes = $request->id_imagenes;
        $targetas->visible = $request->visible;
        $targetas->destacado = $request->destacado;
        $targetas->save();
        return redirect()->route('listaVideos')->with('success', 'La targeta se ha creado Exitosamente');
    }
    public function destroy($id)
    {
        $targetas = listaVideos::find($id);
        $targeta->activo = 1 ;
        $targeta->save();
        return redirect()->route('listaVideos')->with('success', 'El programa se ha borrado Exitosamente');
    }
}
