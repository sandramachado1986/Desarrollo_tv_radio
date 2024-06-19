<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inicio_slide extends Model
{
    use HasFactory;
    protected $table = 'inicio_slide';
    protected $fillable = ['titulo', 'descripcion','imagen'];
    protected $guarded = ['id'];

    public static function obtener_inicio_slide()
    {

        $inicio_slide = DB::table('inicio_slide')
            ->select("inicio_slide.titulo as titulo", "inicio_slide.imagen as imagen", "inicio_slide.descripcion as descripcion")
            ->get();
           
       return $inicio_slide;
    }
}
