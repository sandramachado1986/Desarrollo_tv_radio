<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;

use App\Models\imagenes;
use Validator;

use Illuminate\Http\Request;

class imagenesController extends Controller
{
    public function index()
    {
        $imagenes = imagenes::all();
        return view('imagenes.index', compact('imagenes'));
    }
    public function create()
    {
        $imagenes = imagenes::all();
        return view('imagenes.create', compact('imagenes'));
    }
    public function destroy($id)
        {
        $imagenes = imagenes::find($id);
        $url= str_replace('storage','public',$imagenes->file);
        Storage::delete($url);
        $imagenes->delete();
        return redirect()->route('imagenes')->with('success', 'imagen borrada exitosamente');
        }
    public function update(Request $request, $id)
    {
        $imagenes = imagenes::find($id);
        $imagenes->titulo = $request->titulo;
        if (!empty($request->file)) {
            $img = $request->file('file')->store('');
        }
        
        $url = Storage::url($img);
        $imagenes->file = $img;
        $imagenes->save();
        return redirect()->route('imagenes')->with('success', 'La imagen ha sido cargada Exitosamente');

    }
    public function show($id)
    {
        $imagenes = imagenes::find($id);
        return view('imagenes.show', ['imagenes' => $imagenes]);
        
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'titulo' => 'required|min:3',
                'file' => 'required|image|max:2048',
            ]

        );
        $imagenes = $request->file('file')->store('');



        $imagen = new imagenes;
        $imagen->titulo = $request->titulo;
        $imagen->file = $imagenes;
        $imagen->save();
        return redirect()->route('imagenes')->with('success', 'La imagen ha sido cargada Exitosamente');
    }
}
