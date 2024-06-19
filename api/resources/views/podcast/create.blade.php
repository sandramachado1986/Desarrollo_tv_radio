@extends('app')
@section('content')

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" style="border:solid #f7f7f9;">
        <center><h3>Crear un Podcast</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('podcast')}}" method="POST"novalidate enctype="multipart/form-data">
            @csrf
                <div class="form-group">
                <label for="exampleInput">
                Titulo
                </label>
                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" value="{{old('titulo')}}"/>
                @error('titulo')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>

            
                <div class="form-group">
                <label for="exampleInput">
                Descripcion
                </label>
                <textarea class="form-control @error('descripcion')is-invalid @enderror" id="descripcion"name="descripcion" value="{{old('descripcion')}}"></textarea>
                @error('descripcion')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
            <br>
                 <div class="form-group">
                <label for="exampleInput">
                    Fecha de Publicación
                </label>
                <input type="text" class="form-control @error('fecha_publicación')is-invalid @enderror" id="datepicker"name="fecha_publicacion" >
                  @error('fecha_publicación')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>
                <div class="form-group">
                <label for="exampleInput">
                Link de Podcast
                </label>
                <input type="text" class="form-control @error('link_podcast')is-invalid @enderror" id="link_podcast"name="link_podcast" value="{{old('link_podcast')}}"/>
                @error('link_podcast')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
                </div>
              <div class="control-group">
                <center>
            <button type="submit" class="btn btn-primary">
                Aceptar
            </button></center>
            </div>
        </form>
    </div>
    <div class="col-md-3">
    </div>
</div>
@endsection