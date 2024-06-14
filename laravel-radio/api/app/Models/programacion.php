<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class programacion extends Model
{
    use HasFactory;
    protected $table = 'programacion';
    protected $fillable = ['id_dia,id_horario,id_programa,visible,activo'];
    protected $guarded = ['id'];
    public function horarios()
    {
        return $this->belongsToMany('App\horarios');
    }
    public function dia()
    {
        return $this->belongsToMany('App\dia');
    }
    public function programas()
    {
        return $this->belongsToMany('App\programas');
    }
    public static function obtener_programacion()
    {
        /*SELECT programacion.id , p.descripcion as titulo, h.descripcion as hora, d.descripcion as dias, programacion.visible FROM programacion
inner join programas p on p.id = programacion.id_programa
inner join horarios h on h.id = programacion.id_horario
inner join dias  d  on d.id = programacion.id_dia where programacion.activo=0
ORDER BY programacion.id ASC */
        $programacion = DB::table('programacion')
            ->select("programacion.id_programa as id_programa", "programas.imagen as imageUrl", "horarios.descripcion as time", "programacion.id as id", "dias.descripcion as day", "programas.titulo as show", "programas.descripcion as staff")
            ->join('horarios', 'horarios.id', '=', 'programacion.id_horario')
            ->join('dias', 'dias.id', '=', 'programacion.id_dia')
            ->join('programas', 'programas.id', '=', 'programacion.id_programa')
            ->get();
            return $programacion;

    /*
            // Convertir el resultado a formato JSON
    $json_data = json_encode($programacion);
    // Escribir los datos JSON en un archivo
       // Corregir la ruta de la imagen
       $json_data = str_replace('\/storage\/', '/img/', $json_data);
     $file_path = resource_path('views/frontend_radio_news/test.json');
    file_put_contents($file_path, $json_data);*/

    }
    public static function obtener_programacion_x_dia($dia)
    {

        $programacion = DB::table('programacion')
            ->select("horarios.descripcion as horario", "programacion.id as id", "dias.descripcion as dia", "programas.descripcion as programa")
            ->join('horarios', 'horarios.id', '=', 'programacion.id_horario')
            ->join('dias', 'dias.id', '=', 'programacion.id_dia')
            ->join('programas', 'programas.id', '=', 'programacion.id_programa')
            ->where('dias.descripcion', 'like', $dia)
            ->where('programacion.visible', '=', 0)
            ->where('programacion.activo', '=', 0)
            ->get();
        return $programacion;
    }
    public static function obtener_programa($id_programa)
    {

        $programacion = DB::table('programacion')
        ->select("programas.imagen as imagen_programa", "programas.descripcion as descripcion_programa", "programacion.id_programa as id_programa", "horarios.descripcion as horario", "programacion.id as id", "dias.descripcion as dia","programas.descripcion as programa")
        ->join('horarios', 'horarios.id', '=', 'programacion.id_horario')
        ->join('dias', 'dias.id', '=', 'programacion.id_dia')
        ->join('programas', 'programas.id', '=', 'programacion.id_programa')
        ->where('programacion.id_programa', '=', $id_programa)
            ->where('programacion.visible', '=', 0)
            ->where('programacion.activo', '=', 0)
            ->get();
        
        return $programacion;
    }
}
