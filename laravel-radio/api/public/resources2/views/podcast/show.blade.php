@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-md-4">
            <center><h3>Modificación del Podcast</h3></center>

            <form  method="POST" action="{{ route('podcast-update', ['id' => $podcast->id]) }}" >
            @method('PATCH')
            @csrf
            @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif
                 <div class="form-group">
                <label for="exampleInput">
                Titulo
                </label>
                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" placeholder="" value="{{ $podcast->titulo }}"/>
                @error('titulo')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
               <div class="form-group">
                <label for="exampleInput">
                    Fecha de Publicación
                </label>
                <input type="text" class="form-control @error('fecha_publicación')is-invalid @enderror" id="datepicker"name="fecha_publicacion" placeholder="" value="{{ $podcast->fecha_publicacion }}" >
                  @error('fecha_publicación')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>

            <label for="title" class="form-label"> descripcion</label>
            <input type="text" class="form-control mb-2" name="descripcion" id="exampleFormControlInput1" placeholder="" value="{{ $podcast->descripcion }}">
             <div class="form-group">
                <label for="exampleInput">
                link podcast
                </label>
                <input type="text" class="form-control @error('link_podcast')is-invalid @enderror" id="link_podcast"name="link_podcast" placeholder="" value="{{ $podcast->link_podcast }}"/>
                @error('link_podcast')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
            <center>
            </br>
            <button type="submit" class="btn btn-primary">
            Aceptar
            </button>  
            </center>
            </form>
    </div>
    <div class="col-md-4">
    </div>
</div>

    @endsection