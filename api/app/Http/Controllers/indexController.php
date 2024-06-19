<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\podcast;
use App\Models\programacion;
use App\Models\inicio_slide;

use Illuminate\Support\Facades\View;



class indexController extends Controller
{
    //
    public static function cargar_index()
    {
        $programacion = programacion::obtener_programacion();
        $podcasts = podcast::obtener_podcast();
        return View::make('frontend_radio_news.index')
        ->with('programacion', $programacion);
      
    
       

        



//return View::make('frontend_radio_news.index');

   /*  $inicio = inicio_slide::all();
      
    /*    $dia_lunes = programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes = programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles = programacion::obtener_programacion_x_dia("Miércoles");
        $dia_jueves = programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes = programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado = programacion::obtener_programacion_x_dia("Sábado");
        $dia_domingo = programacion::obtener_programacion_x_dia("Domingo");
     /*return view('frontend.inicio', ['inicio'=>$inicio,'programacion' => $programacion, 'programacionLunes' => $dia_lunes, 'programacionMartes' => $dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' => $dia_viernes, 'programacionSabado' => $dia_sabado, 'programacionDomingo' =>
    $dia_domingo]);*/

   /* $programacion = programacion::obtener_programacion();
  return view('frontend_radio_news.index');*/
  
        // Ruta al archivo index.html dentro de la carpeta public
    //$filePath = public_path('views/frontend_radio_news/index.html');
    
    
    // Verificar si el archivo existe
  /*  if (File::exists($filePath)) {
        // Leer el contenido del archivo y retornarlo
        return File::get($filePath);
    } else {
        // En caso de que el archivo no exista, puedes retornar un mensaje de error o una vista de error
        return response()->json(['error' => 'Archivo no encontrado'], 404);
    }*/
    
    }
    
}
