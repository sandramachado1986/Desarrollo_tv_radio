@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <center><h3>Crear Targeta</h3></center>
    @if (Session::has('success'))
    
    <div class="alert alert-secondary" role="alert">
    {{session::get('success')}}
    </div>
    @endif

        <form role="form"  action="{{route('listaVideos')}}" method="POST"  enctype="multipart/form-data">
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
        Categorias
        </label>
        <select  name ="id_categoria" class="form-select form-control" aria-label="Default select example">
        <option selected>Seleccione una Categoría</option>
        @foreach ($categorias as $categoria)
        <option value="{{$categoria['id']}}">{{$categoria['titulo']}}</option>
        @endforeach
        </select>
        </div>
        
        <div class="form-group">
        <label for="exampleInput">
        Imágenes 
        </label>
        <select class="form-control form-select" name="id_imagenes" aria-label=".form-select-lg example">
        <option selected>Seleccione una Imagen</option>
        @foreach ($imagenes as $imagen)
        <option value="{{$imagen['id']}}">{{$imagen['titulo']}}</option>
        @endforeach
        </select>
        </div>
        
        <div class="control-group">
    <label for="exampleInput">
    Visible
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible1" value="1">
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible2" value="0" >
 
  No
 </div>
</div>
<div class="control-group">
    <label for="exampleInput">
    Destacados
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado1" value="1">
    1 Columna 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado2" value="3" >
 
  3 Columna
 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado" value="0" >
 
  Carousel
 
</div>
</div>

        <div class="control-group">
          <center> <button type="submit" class="btn btn-primary">
        Aceptar
        </button></center>
       
        </div>
        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
@endsection