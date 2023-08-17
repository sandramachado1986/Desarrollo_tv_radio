<?php

namespace App\Http\Controllers;

use App\Models\programas;
use Validator;
use Illuminate\Http\Request;

class programasController extends Controller
{
    public function index()
    {
        $programas = programas::all();
        return view('programas.index', compact('programas'));
    }
    public function create()
    {
        $programas = programas::all();
        return view('programas.create', compact('programas'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'descripcion' => 'required|min:3',
            ]
        );
        $programa = new programas;
        $programa->descripcion = $request->descripcion;
        $programa->save();
        return redirect()->route('programas')->with('Exitos', 'El programa se ha borrado Exitosamente');
    }
    public function show($id)
    {
        $programas = programas::find($id);
        return view('programas.show', compact('programas'));
    }
    public function update(Request $request, $id)
    {
        $programa = programas::find($id);
        $programa->descripcion = $request->descripcion;
        $programa->save();
        return redirect()->route('programas')->with('success', 'El programa se ha Actualizado Correctamente');
    }
    public function destroy($id)
    {
        $programas = programas::find($id);
        $programas->delete();
        return redirect()->route('programas')->with('success', 'El programa se ha borrado Exitosamente');
    }
    
    
}
