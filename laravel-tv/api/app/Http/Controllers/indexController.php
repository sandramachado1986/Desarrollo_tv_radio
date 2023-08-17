<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\videos;
use App\Models\categorias;
use App\Models\listaVideos;
use App\Models\programacion;
use Validator;
use Illuminate\Support\Collection;
class indexController extends Controller
{
    //
    public function obtenerVivo()
    {
    $vivo = videos::where('vivo', '1')->get();
    return $vivo;
    }
    public function obtenervideos($id)
    {
        /**/
        $vivo = indexController::obtenerVivo();
        $vivo = json_decode($vivo, true);
        $videoVivo = [
            "link_id" => $vivo[0]["link_id"],
            "link_video" => $vivo[0]["link_video"],
            "link_img" =>  $vivo[0]["link_img"],
            "titulo" => $vivo[0]["titulo"]
        ];
        $lista_videos_categoria = videos::obtenervideoscategoria($id);
       $obtenertitulocategoria= videos::obtenertitulocategoria($id);
        $categorias = categorias::all();

        return view('frontend.videos', ['titulo_categoria' => $obtenertitulocategoria, 'categorias' => $categorias, 'lista_videos_categoria' => $lista_videos_categoria, 'vivo' => $videoVivo]);
     //  return view('frontend.seccionvideos', ['lista_videos_categoria' => $lista_videos_categoria, 'vivo' => $videoVivo]);
    }
    public function obtener3Columnas()
    {
        $trescolumnas = listaVideos::obtener_targetas_3columnas();
        return $trescolumnas;
    }
    public function obtener1Columnas()
    {
        $unaColumna = listaVideos::obtener_targetas_1columna();
        return $unaColumna;
    }
    public function obtenerCarousel()
    {
        $Carouselcolumnas = listaVideos::obtener_targetas_carousel();
        return $Carouselcolumnas;
    }
    public static  function obtenerCategoriasCarouseles()
    {
   
        
    }
    public function CargarStaff()

    {
        $vivo = indexController::obtenerVivo();
        $vivo = json_decode($vivo, true);
        $videoVivo = [
            "link_id" => $vivo[0]["link_id"],
            "link_video" => $vivo[0]["link_video"],
            "link_img" =>  $vivo[0]["link_img"],
            "titulo" => $vivo[0]["titulo"]
        ];
        
        $categorias = categorias::all();

        return view('frontend.staff', ['categorias' => $categorias, 'vivo' => $videoVivo]);
    }
       public function devolver_todos_los_videos()
    {
        /**/
        $vivo = indexController::obtenerVivo();
        $vivo = json_decode($vivo, true);
        $videoVivo = [
            "link_id" => $vivo[0]["link_id"],
            "link_video" => $vivo[0]["link_video"],
            "link_img" =>  $vivo[0]["link_img"],
            "titulo" => $vivo[0]["titulo"]
        ];
        $lista_todos_los_videos = videos::obtenervideosycategorias();
        $categorias = categorias::all();
        return view('frontend.todos_los_videos', [ 'categorias' => $categorias, 'lista_todos_los_videos' => $lista_todos_los_videos, 'vivo' => $videoVivo]);
    }
    public function CargarGrilla()

    {
        $vivo = indexController::obtenerVivo();
        $vivo = json_decode($vivo, true);
        $videoVivo = [
            "link_id" => $vivo[0]["link_id"],
            "link_video" => $vivo[0]["link_video"],
            "link_img" =>  $vivo[0]["link_img"],
            "titulo" => $vivo[0]["titulo"]
        ];
        $dia_lunes =programacion::obtener_programacion_x_dia("Lunes");
        $dia_martes =programacion::obtener_programacion_x_dia("Martes");
        $dia_miercoles =programacion::obtener_programacion_x_dia("Miercoles");
        $dia_jueves =programacion::obtener_programacion_x_dia("Jueves");
        $dia_viernes =programacion::obtener_programacion_x_dia("Viernes");
        $dia_sabado =programacion::obtener_programacion_x_dia("Sabado");
        $dia_domingo =programacion::obtener_programacion_x_dia("Domingo");
        return view('frontend.grillafinal', [ 'vivo' => $videoVivo,'programacionLunes'=>$dia_lunes, 'programacionMartes' =>$dia_martes, 'programacionMiercoles' => $dia_miercoles, 'programacionJueves' => $dia_jueves, 'programacionViernes' =>$dia_viernes, 'programacionSabado' =>$dia_sabado, 'programacionDomingo' => $dia_domingo]);
    }
    public function CargarFrontend()
    {
      $vivo = indexController::obtenerVivo();
        $vivo =json_decode($vivo,true);
        $videoVivo = [
        "link_id" => $vivo[0]["link_id"],
        "link_video" => $vivo[0]["link_video"],
        "link_img" =>  $vivo[0]["link_img"],
        "titulo" => $vivo[0]["titulo"]
        ];
        $destacada3 = indexController::obtener3Columnas();
        // $destacada3 = json_decode($destacada3, true);
        $destacada1 = indexController::obtener1Columnas();
        $destacada1 = json_decode($destacada1, true);
        $destacadaCarousel = indexController::obtenerCarousel();
        /*   $lista_videos_categoria = videos::obtenervideoscategoria(3);      
        $lista_videos_categoria = json_decode($lista_videos_categoria, true) ;
        var_dump($lista_videos_categoria); */
        //  $destacadaCarousel = json_decode($destacadaCarousel, true);
        return view('frontend.portada', ['vivo' => $videoVivo, 'destacada3' => $destacada3, 'destacada1' => $destacada1, 'destacadaCarousel' => $destacadaCarousel]);
       //return view('frontend.frontend',['vivo' => $videoVivo, 'destacada3' => $destacada3, 'destacada1' => $destacada1, 'destacadaCarousel' => $destacadaCarousel]);
    }
  



}