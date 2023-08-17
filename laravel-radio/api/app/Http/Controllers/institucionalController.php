<?php

namespace App\Http\Controllers;

use App\Models\institucional;
use App\Models\programacion;
use Validator;

use Illuminate\Http\Request;

class institucionalController extends Controller
{
    public function index()
    {
        $institucional = institucional::find("1");
        return view('institucional.institucional', compact('institucional'));
    }
    public function store(Request $request)
    {
        
        $request->validate(
            [
                'titulo' => 'required|min:3',
                'descripcion' => 'required|min:3',
            ]
        );
        $institucional = institucional::find("1");
        $institucional->titulo = $request->titulo;
        $institucional->descripcion = $request->descripcion;
        $institucional->save();

        return redirect()->route('institucional')->with('success', ' se ha editado Exitosamente');
    }

    public function show()
    {
        $institucional = institucional::find("1");
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.institucional', ['institucional' => $institucional, 'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);
    }

}
