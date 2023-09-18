<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\modals;
use App\Models\categorias;
use Illuminate\Support\Facades\Storage;




class modalsController extends Controller
{
    public function index()
    {
        $modals = modals::all();
        return view('modals.index', compact('modals'));
    }
    public function create()
    {
        $categorias = categorias::all();
        return view('modals.create', compact('categorias'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|min:3',
            'descripcion' => 'required|min:3',
            'imagen' => 'required|image|max:2048',
        ]);
    
        // Almacenar la imagen en storage/app/public
        $imagenPath = $request->file('imagen')->store('');
    
      
        $modal = new Modals;
        $modal->titulo = $request->titulo;
        $modal->descripcion = $request->descripcion;
        $modal->id_categoria = $request->id_categoria;
        
        $modal->imagen = $imagenPath; // Usar la ruta pública
       $modal->save();
     return redirect()->route('modals')->with('success', 'El modal ha sido cargado exitosamente');
    }
    

public function show($id)
{
    $modals = modals::find($id);
    return view('modals.show', compact('modals'));
}

public function edit($id)
{
    $modals = modals::find($id);
    return view('modals.edit', compact('modals'));
}

public function update(Request $request, $id)
{
    // Valida y actualiza la migración existente
}

public function destroy($id)
{
    // Elimina la migración
}


}