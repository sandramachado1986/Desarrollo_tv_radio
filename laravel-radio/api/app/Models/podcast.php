<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; // Agregar esta línea


class podcast extends Model
{
    use HasFactory;
    protected $table = 'podcast';
    protected $fillable = ['titulo', 'descripcion','fecha_publicacion', 'link_podcast'];
    protected $guarded = ['id'];
    public static function obtener_podcast()
    {

        $podcast = DB::table('podcast')
            ->select("podcast.titulo", "podcast.fecha_publicacion", "podcast.link_podcast","podcast.descripcion")
            ->get();
           
            $json_data = json_encode($podcast);
            // Escribir los datos JSON en un archivo
               // Corregir la ruta de la imagen
               $json_data = str_replace('\/storage\/', '/img/', $json_data);
        
            $file_path = resource_path('views/frontend_radio_news/podcast.json');
            file_put_contents($file_path, $json_data);
    }
}

