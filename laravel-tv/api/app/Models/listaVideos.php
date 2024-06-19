<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\imagenes;
use App\Models\categorias;
use Illuminate\Support\Facades\DB;

class listaVideos extends Model
{
    use HasFactory;

    protected $table = 'listavideos';
    protected $fillable = ['id', 'titulo', 'id_categoria','id_imagenes','visible','destacado'];
    protected $guarded = ['id'];
    public function categorias()
    {
        return $this->belongsToMany('App\categorias');
    }
    public function imagenes()
    {
        return $this->belongsToMany('App\imagenes');
    }
    
    public static function obtener_targetas()
    {

        $listaVideos = DB::table('listavideos')
        ->select("categorias.id  as id_categoria", "listavideos.destacado as destacado", "listavideos.visible as visible","listavideos.titulo as titulo", "listavideos.id as id", "categorias.titulo as categoria", "imagenes.file as imagen")
        ->join('categorias', 'categorias.id', '=', 'listavideos.id_categoria')
        ->join('imagenes', 'imagenes.id', '=', 'listavideos.id_imagenes')
        ->get();
        return $listaVideos;
    }
    public static function obtener_targetas_3columnas()
    {

        $listaVideos = DB::table('listavideos')
        ->select("listavideos.destacado as destacado", "listavideos.visible as visible", "listavideos.titulo as titulo", "listavideos.id as id", "categorias.id as id_categoria", "categorias.titulo as categoria", "imagenes.file as imagen")
        ->join('categorias', 'categorias.id', '=', 'listavideos.id_categoria')
        ->join('imagenes', 'imagenes.id', '=', 'listavideos.id_imagenes')
        ->where('listavideos.visible', '=', 1)
        ->where('listavideos.destacado', '3')->limit(3)->get();
        return $listaVideos;
    }
    public static function obtener_targetas_1columna()
    {

        $listaVideos = DB::table('listavideos')
        ->select("listavideos.destacado as destacado", "listavideos.visible as visible",'categorias.descripcion', "listavideos.titulo as titulo", "listavideos.id as id", "categorias.id as id_categoria", "categorias.titulo as categoria", "imagenes.file as imagen")
        ->join('categorias', 'categorias.id', '=', 'listavideos.id_categoria')
        ->join('imagenes', 'imagenes.id', '=', 'listavideos.id_imagenes')
        ->where('listavideos.visible', '=', 1)
        ->where('listavideos.destacado', '1')->limit(1)->get();
        return $listaVideos;
    }
    public static function obtener_targetas_carousel()
    {
        $listaVideos = DB::table('listavideos')
        ->select( "categorias.id as id_categoria", "categorias.titulo as categoria")
        ->join('categorias', 'categorias.id', '=', 'listavideos.id_categoria')
      
        ->where('listavideos.visible', '=', 1)
        ->where('listavideos.destacado', '0')
        ->where('listavideos.activo', '0')
        ->groupBy('categorias.id')
        ->groupBy('categorias.titulo')
        ->get();
        return $listaVideos;
    }

}
