<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = ['titulo','fecha_carga' ,'link_id' ,'publicado' ,'destacado' ,'vivo' ,'id_categoria','descripcion' ,'thumbnail' ,'link_video' ,'link_img' ,'reproductor'];
    protected $guarded = ['id'];

    public static function obtenervideoscategoria($id)
    {
        $listaVideos = DB::table('videos')
        ->select("videos.titulo" , "videos.link_id", "videos.link_video" , "videos.link_img", "categorias.titulo as categoria", "categorias.id as id_categoria","categorias.descripcion as descripcion_categoria")
        ->join('categorias', 'categorias.id', '=', 'videos.id_categoria')
        ->where('videos.id_categoria', '=', $id)
        ->where('videos.publicado', '=', 1)
        ->get();
        
        return $listaVideos;
    }
    public static function obtenervideosycategorias()
    {
        $listaVideos = DB::table('videos')
        ->select("videos.id","videos.titulo", "videos.link_video", "videos.vivo", "videos.fecha_carga", "videos.link_id", "videos.publicado", "videos.link_img", "videos.destacado", "categorias.titulo as categoria", "videos.id_categoria as id_categoria")
        ->leftjoin('categorias', 'categorias.id', '=', 'videos.id_categoria')
        ->get();
        return $listaVideos;
    }
    public static function obtenertitulocategoria($id)
    {
        $categoria = DB::table('categorias')
            ->select("categorias.titulo as categoria")
            ->join('videos', 'categorias.id', '=', 'videos.id_categoria')
            ->where('videos.id_categoria', '=', $id)->get();
        return $categoria;
    }
        
}

