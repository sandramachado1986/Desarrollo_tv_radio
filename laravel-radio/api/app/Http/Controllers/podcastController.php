<?php

namespace App\Http\Controllers;

use App\Models\podcast;
use App\Models\programacion;
use Validator;
use Carbon\Carbon;


use Illuminate\Http\Request;

class podcastController extends Controller
{
    public function index()
    {

        $podcast = podcast::all();
        return view('podcast.index', compact('podcast'));
    }
    public function create()
    {
        return view('podcast.create');
    }
    public function store(Request $request)
    {
        $podcast = new podcast;
        $podcast->titulo = $request->titulo;
        $podcast->descripcion = $request->descripcion;
        $date = Carbon::parse($request->fecha_publicacion);
        $podcast->fecha_publicacion = $date->format('Y-m-d');
        $podcast->link_podcast = $request->link_podcast;
      
       $podcast->save();
        return redirect()->route('podcast')->with('Exito!', 'El podcast se ha borrado Exitosamente');
    }
    public function show($id)
    {
        $podcast = podcast::find($id);
        return view('podcast.show', compact('podcast'));
    }

    public function show_podcast()
    {
        $podcast = podcast::all();
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.podcast', ['podcast' => $podcast, 'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);

   
    }
    public function show_radio_vivo()
    {
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.radiovivo', [ 'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);
        
    }
    public function update(Request $request, $id)
    {
        $podcast = podcast::find($id);
        $podcast->titulo = $request->titulo;
        $podcast->descripcion = $request->descripcion;
        $date = Carbon::parse($request->fecha_publicacion);
        $podcast->fecha_publicacion = $date->format('Y-m-d');
        $podcast->link_podcast = $request->link_podcast;
        $podcast->save();
        return redirect()->route('podcast')->with('success', 'El podcast se ha Actualizado Correctamente');
    }
    public function destroy($id)
    {
        $podcast = podcast::find($id);
        $podcast->delete();
        return redirect()->route('podcast')->with('success', 'El podcast se ha borrado Exitosamente');
    }

}
