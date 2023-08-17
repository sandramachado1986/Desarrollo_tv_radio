<?php

namespace App\Http\Controllers;
use App\Models\horarios;
use App\Models\dias;
use App\Models\programas;
use App\Models\programacion;
use Validator;

use Illuminate\Http\Request;

class programacionController extends Controller
{
    public function index()
    {
        $programacion = programacion::obtener_programacion();
        return view('programacion.index', compact('programacion'));
    }
    public function create()
    {
        $dias = dias::all();
        $horarios = horarios::all();
        $programas = programas::all();
        return view('programacion.create',  ['dias' => $dias, 'horarios' => $horarios, 'programas' => $programas]);
    }
    public function store(Request $request)
    {
        $programacion = new programacion;
        $programacion->id_dia = $request->id_dia;
        $programacion->id_horario = $request->id_horario;
        $programacion->id_programa = $request->id_programa;
        $programacion->visible = $request->visible;
        $programacion->save();
        return redirect()->route('cargar_programacion')->with('success', 'la programación se ha cargado Exitosamente');
    }
    public function destroy($id)
    {
        $programacion = programacion::find($id);
        $programacion->delete();
        return redirect()->route('cargar_programacion')->with('success', 'El programa se ha borrado Exitosamente');
    }



}
