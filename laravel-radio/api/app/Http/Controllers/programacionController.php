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
    public function show_programacion()
    {
        $programacion = programacion::obtener_programacion();
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.programacion', ['programacion'=>$programacion,'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);
    }
    public function show_video_vivo()
    {

       
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.videovivo', ['programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);
       
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
