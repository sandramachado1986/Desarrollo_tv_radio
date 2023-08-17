@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
       
    </div>

    <div class="col-md-4">
         <center><h3>Creación de Video</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}

        @endif

        <form role="form" action="{{route('videos')}}" method="POST"novalidate>
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
            <div class="form-group">
                <label for="exampleInput">
                    Fecha
                </label>
                <input type="text" class="form-control @error('fecha_carga')is-invalid @enderror" id="datepicker"name="fecha_carga" value="{{old('fecha_carga')}}">
                  @error('fecha_carga')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>

            <div class="form-group">
<input type="radio" id="reproductor" name="reproductor" value="1" onclick="habilitarText1(this)">
            <label for="youtube">Link Youtube
            </label>
            <div class="control-group">
            link id
            <input required="true" class="form-control @error('link_id')is-invalid @enderror" id="txt5"name="link_id" value="{{old('link_id')}}" type="text" disabled />
            @error('link_id')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror

            </div>
            <div class="control-group">
            link video
            <input required="true" class="form-control @error('link_video')is-invalid @enderror" id="txt1"name="link_video" value="{{old('link_video')}}" type="text" disabled />
            @error('link_video')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror
        </div>
            <div class="control-group">
            link imagen
            <input required="true"class="form-control @error('link_img')is-invalid @enderror" id="txt3"name="link_img" value="{{old('link_img')}}"  type="text" disabled />
             @error('link_img')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror
        </div>
            <br>
            <input type="radio" id="reproductor" name="reproductor" value="2" onclick="habilitarText2(this)">
            <label for="dailymotion">Link Dailymotion
            </label>
            <div class="control-group">
            link video
            <input required="true" class="form-control @error('link_video2')is-invalid @enderror" id="txt2"name="link_video2" value="{{old('link_video2')}}"  type="text" disabled />
        @error('link_video2')
        <span class="invalid-feedback ">
        <strong class="alert-danger">
        {{$message}}
        </strong></span> 
        @enderror    
        </div>
            <div class="control-group">
            link imagen
            <input required="true" class="form-control @error('link_img2')is-invalid @enderror" id="txt4"name="link_img2" value="{{old('link_img2')}}" type="text" disabled />
            @error('link_img2')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror     
        </div>
<br>
</div>
    <div class="form-group">
    <label for="exampleInput">
    Categorías
    </label>
    <select class="form-control" name="id_categoria" aria-label=".form-select-lg example">
    <option selected>Seleccione una Categoría</option>
    @foreach ($categorias as $categoria)
    <option value="{{$categoria['id']}}">{{$categoria['titulo']}}</option>
    @endforeach
    </select>
    </div>

<div class="control-group">
    <label for="exampleInput">
    Publicado
    </label>
<div class="form-check">
  <input class="form-check-input " type="radio" name="publicado" id="publicado1" value="1">
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="publicado" id="publicado2" value="0" >

  No
 
</div>
</div>

<div class="control-group">
    <label for="exampleInput">
    Destacado
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado1" value="1">
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado2" value="0" >
 
  No
 
</div>


            
            <button type="submit" class="btn btn-primary">
                Aceptar
            </button>
        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
@endsection