<?php

namespace App\Http\Controllers;
use App\Models\inicio_slide;
use Validator;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class inicio_slideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inicio_slide = inicio_slide::all();
        return view('inicio.index', compact('inicio_slide'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('inicio.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'descripcion' => 'required|min:3',
                'titulo' => 'required|min:3',
                'imagen' => 'required|image|max:2048',
            ]
        );
        
        $imagenPath = $request->file('imagen')->store('img/slide');
        $nombreArchivo = basename($imagenPath);
        $imagenPublicPath = 'public/img/slide/' . $nombreArchivo;
        Storage::move($imagenPath, $imagenPublicPath);
       $inicio = new inicio_slide;
        $inicio->descripcion = $request->descripcion;
        $inicio->titulo = $request->titulo;
        $inicio->imagen = $imagenPath ;
        $inicio->save();
        return redirect()->route('inicio_slide')->with('Exito!', 'El programa se ha guardado Exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inicio_slide = inicio_slide::find($id);
        return view('inicio.show', compact('inicio_slide'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $inicio_slide = inicio_slide::find($id);
        $inicio_slide->descripcion = $request->descripcion;
        $imagenPath = $request->file('imagen')->store('img/slide');
        $nombreArchivo = basename($imagenPath);
        $imagenPublicPath = 'public/img/slide' . $nombreArchivo;
        Storage::move($imagenPath, $imagenPublicPath);
        $inicio_slide->imagen = $imagenPath ;
        $inicio_slide->save();
       return redirect()->route('inicio_slide')->with('Exito', 'El slide se ha Actualizado Correctamente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inicio_slide = inicio_slide::find($id);
        $inicio_slide->delete();
        return redirect()->route('inicio_slide')->with('Exito', 'El slide se ha borrado Exitosamente');
    }
}
