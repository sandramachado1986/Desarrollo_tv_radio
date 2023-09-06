<?php

namespace App\Http\Controllers;

use App\Models\programas;
use App\Models\programacion;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
                'titulo' => 'required|min:3',
                'imagen' => 'required|image|max:2048',
            ]
        );
        
        $imagenPath = $request->file('imagen')->store('img');
        $nombreArchivo = basename($imagenPath);
        $imagenPublicPath = 'public/img/' . $nombreArchivo;
        Storage::move($imagenPath, $imagenPublicPath);


       $programa = new programas;
        $programa->descripcion = $request->descripcion;
        $programa->titulo = $request->titulo;
        $programa->imagen = $imagenPath ;
        $programa->save();
        return redirect()->route('programas')->with('Exito!', 'El programa se ha guardado Exitosamente');
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
        $imagenPath = $request->file('imagen')->store('img');
        $nombreArchivo = basename($imagenPath);
        $imagenPublicPath = 'public/img/' . $nombreArchivo;
        Storage::move($imagenPath, $imagenPublicPath);
        $programa->imagen = $imagenPath ;
        
        $programa->save();
       return redirect()->route('programas')->with('Exito', 'El programa se ha Actualizado Correctamente');
    }
    public function destroy($id)
    {
        $programas = programas::find($id);
        $programas->delete();
        return redirect()->route('programas')->with('Exito', 'El programa se ha borrado Exitosamente');
    }
    public function show_programa_contextual($id)
    {
        $programa = programacion::obtener_programa($id);
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");

      return view('frontend.programacontextual', ['programa'=>$programa,'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);
       
    }
}
