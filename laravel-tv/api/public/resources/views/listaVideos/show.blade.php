@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <center><h3>Modificación de Targeta</h3></center>
    @if (Session::has('success'))
    <div class="alert alert-secondary" role="alert">
    {{session::get('success')}}
    </div>
    @endif

        <form role="form"  action="{{ route('targetas-update', ['id' => $targetas->id]) }}" method="POST"  enctype="multipart/form-data">
         @method('PATCH')
        @csrf
        <div class="form-group">
                <label for="exampleInput">
                    Titulo
                </label>
                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" value="{{($targetas->titulo);}}"/>
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
        <select class="form-select form-select-lg mb-3" name="id_categoria" aria-label=".form-select-lg example">
        <option>Seleccione una Categoría</option>
        @foreach ($categorias as $categoria)
        @if ($categoria['id']== $targetas->id_categoria)
            <option value="{{$categoria['id']}}"selected>{{$categoria['titulo']}}</option>
        @else
        <option value="{{$categoria['id']}}">{{$categoria['titulo']}}</option>
        @endif
        
        @endforeach
        </select>
        </div>
       
        <div class="form-group">
        <label for="exampleInput">
        Imágenes 
        </label>
        <select class="form-select form-select-lg mb-3" name="id_imagenes" aria-label=".form-select-lg example">
        <option selected>Seleccione una Imagen</option>
        @foreach ($imagenes as $imagen)
        @if ($imagen['id']==$targetas->id_imagenes)
            <option value="{{$imagen['id']}}"selected>{{$imagen['titulo']}}</option>
            @else
             <option value="{{$imagen['id']}}">{{$imagen['titulo']}}</option>
        @endif
        
        @endforeach
        </select>
        </div>
        
        <div class="control-group">
    <label for="exampleInput">
    Visible
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible1" value="1" @if ($targetas->visible == 1){{ 'checked' }} @endif>
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible2" value="0" @if ($targetas->visible == 0){{ 'checked' }} @endif >
 
  No
 </div>
</div>
<div class="control-group">
    <label for="exampleInput">
    Destacados
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado1" value="1" @if ($targetas->destacado == 1){{ 'checked' }} @endif>
    1 Columna 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado2" value="3"  @if ($targetas->destacado == 3){{ 'checked' }} @endif >
 
  3 Columna
 
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado" value="0"  @if ($targetas->destacado == 0){{ 'checked' }} @endif>
 
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