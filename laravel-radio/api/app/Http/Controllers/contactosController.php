<?php

namespace App\Http\Controllers;

use App\Models\contactos;
use App\Models\programacion;

use Validator;


use Illuminate\Http\Request;

class contactosController extends Controller
{
    public function index()
    {
        $contactos = contactos::find("1");
       
        return view('contactos.index', compact('contactos'));
    }
    public function show()
    {
        $contactos = contactos::find("1");
        $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.contactos', ['contactos' => $contactos, 'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
        $dia_domingo]);

          
    }
    public function store(Request $request)
    {

        $request->validate(
            [
               
                'descripcion' => 'required|min:3',
            ]
        );
        $contactos = contactos::find("1");
        $contactos->descripcion = $request->descripcion;
        $contactos->save();

        return redirect()->route('contactos')->with('success', ' se ha editado Exitosamente');
    }


}
