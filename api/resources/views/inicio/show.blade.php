@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-md-4">
            <center><h3>Modificación del slide</h3></center>

            <form  method="POST" action="{{ route('inicio_slide-update', ['id' => $inicio_slide->id]) }}"novalidate enctype="multipart/form-data">
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
                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" placeholder="" value="{{ $inicio_slide->titulo }}"/>
                @error('titulo')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
               

             <div class="form-group">
                <label for="exampleInput">
                 descripcion
                </label>
                <input type="text" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion"name="descripcion" placeholder="" value="{{ $inicio_slide->descripcion }}"/>
                @error('descripcion')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
                <label for="title" class="form-label"> Imagen</label>
        <input   class="form-control @error('file')is-invalid @enderror" id="imagen" type="file" name="imagen" accept="image/*" value="{{ $inicio_slide->imagen }}"/>
        @error('imagen')
        <span class="invalid-feedback ">
        <strong class="alert-danger">
        {{$message}}
        </strong></span> 
        @enderror

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