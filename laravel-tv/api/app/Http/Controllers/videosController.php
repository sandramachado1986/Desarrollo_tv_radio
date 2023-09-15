<?php
namespace App\Http\Controllers;
use App\Models\videos;
use App\Models\categorias;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class videosController extends Controller
{
    public function index()
	{
        $videos = videos::obtenervideosycategorias();
        return view('videos.index', compact('videos'));
	}
    public function importar()
    {
        $categorias = categorias::all();
        return view('videos.importar', compact('categorias'));
    }
 
    public function jsonimportado(Request $request)
    {
       $video = new videos;
        $tipo_fichero = $_FILES['filejson']['type'];
        $nombre_fichero = $_FILES['filejson']['name'];
        $ruta = $_FILES['filejson']['tmp_name'];
        $data = file_get_contents($ruta);
        $videos_importar = json_decode($data, true);
        $id_categoria = $request->id_categoria;
      
      $items= $videos_importar["items"];
        $hay = count($items);
        for ($i = 0; $i < $hay; $i++) {

            if (!empty($items[$i])) {
                $titulo = $items[$i]["snippet"]["title"];

                if (isset( $items[$i]["snippet"]["thumbnails"]["high"]["url"])) {
                    // Acceder al valor del índice 'default'
                    $imgthum = $items[$i]["snippet"]["thumbnails"]["high"]["url"];
                    // Hacer algo con $valorDefault
                } else {
                   echo"indice no definido";
                }
                $reproductor = $items[$i]["snippet"]["resourceId"]["kind"];
                $video = new videos;
                $video->titulo = $titulo;
                $video->reproductor = $reproductor;
                if ($reproductor == "youtube#video") {
                    $videoid = $items[$i]["snippet"]["resourceId"]["videoId"];
                    $link_video = "https://www.youtube.com/watch?v=" . $videoid . "";
                    $reproductor_flag = 1;
                }
                if ($reproductor_flag == 1) {

                    $video->link_img = $imgthum;
                    $video->link_id = $videoid;
                    $video->link_video = $link_video;
                    $video->id_categoria =$id_categoria;

                    $video->save();
                } else {
                    echo "ocurrió un error no pude importar";
                }
            } else {

                if ($i == $hay) {
                    return redirect()->route('videos')->with('success', 'se han agregado ' . $hay . 'videos correctamente');
                }
            }
        }

        if ($i == $hay) {
            return redirect()->route('videos')->with('success', 'se han agregado ' . $hay . 'videos correctamente');
        }
    

    
        
       
  
    }
    public function show($id)
    {
        $videos = videos::find($id);
        $categoria = categorias::all();
        return view('videos.show', ['videos' => $videos, 'categorias' => $categoria]);
    }
    public function update(Request $request, $id)
    {
        $video= videos::find($id);
        $video->titulo = $request->titulo;
        $date = Carbon::parse($request->fecha_carga);
        $video->fecha_carga = $date->format('Y-m-d');
        $video->descripcion = $request->descripcion;
        $video->publicado = $request->publicado;
        $video->destacado = $request->destacado;
        $video->id_categoria = $request->id_categoria;
        $video->reproductor = $request->reproductor;
        $video->link_video = $request->link_video;
        $video->link_img = $request->link_img;
        if ($request->reproductor == "1") {
        $video->link_id = $request->link_id;
        $video->link_video = $request->link_video;
        $video->link_img = $request->link_img;
        $video->thumbnail = $request->link_img;
        } else {

        if ($request->reproductor == "2") {
        $video->link_video = $request->link_video2;
        $video->link_img = $request->link_img2;
        }
        }

        $video->save();
        return redirect()->route('videos')->with('success', 'Video Actualizado Correctamente');
    
    }
    public function store(Request $request)
    {
        $request->validate(
            ['titulo' => 'required|min:3',
            'fecha_carga' => 'required|date',
            'descripcion' => 'required|min:3',
            ]);
        $video = new videos;
        $video->titulo= $request->titulo;
        $date = Carbon::parse($request->fecha_carga);
        $video->fecha_carga= $date->format('Y-m-d');
        $video->descripcion = $request->descripcion;
        $video->publicado= $request->publicado;
        $video->destacado= $request->destacado;
        $video->id_categoria= $request->id_categoria;
        $video->reproductor = $request->reproductor;
        $video->link_video = $request->link_video;
        $video->link_img = $request->link_img; 
       if ($request->reproductor== "1")
        {
            $video->link_id = $request->link_id;
            $video->link_video = $request->link_video;
            $video->link_img = $request->link_img;
            $video->thumbnail = $request->link_img;

        }
        else {
            if ($request->reproductor == "2") {
                $video->link_video = $request->link_video2;
                $video->link_img = $request->link_img2;
                
            }
        }
        $video->save();
        return redirect()->route('videos')->with('success', 'Video guardado Correctamente');
    }
    public function create()
    {
        $categorias = categorias::all();
        return view('videos.create', compact('categorias'));
    }
    public function acortar_titulo($titulo)
    {
        $cadena=$titulo;
        $longitud_cadena= strlen ($cadena);
        $cadena_extraida =substr($cadena,30,$longitud_cadena);
        $titulo_actualizado=str_replace($cadena_extraida,"...",$cadena);
        return $titulo_actualizado;

    }
    public function destroy($id)
    {
        $videos = videos::find($id);
        $videos->delete();
        return redirect()->route('videos')->with('success', 'video borrado exitosamente');
    }
    public function showVivo()
    {
        $videos = videos::orderby('updated_at','DESC')->get();
        return view('videos.vivo', compact('videos'));
       
    }
     public static function updatevivo()
    {
        $vivo = videos::where('vivo', '1')->get();
      foreach ($vivo as $value) {
        $id=$value->id;
            $video = videos::find($id);
            $video->vivo = "0";
            $video->save();
       
      }
       
    }

    public function vivoguardar(Request $request)
    {
        videosController::updatevivo();
    $id=$request->id_video;
    $video = videos::find($id);

    $video->vivo="1";
    $video->save();
    return redirect()->route('videos')->with('success', 'EL video fue puesto en vivo  exitosamente');
    }
  
}
