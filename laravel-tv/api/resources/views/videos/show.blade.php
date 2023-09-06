@extends('app')


@section('content')

<div class="row">
    <div class="col-md-4">
       
    </div>

    <div class="col-md-4">



    <div class="row mx-auto">
    <form  method="POST" action="{{ route('videos-update', ['id' => $videos->id]) }}">
        @method('PATCH')
        @csrf
        <div class="mb-3 col">
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
             <center><h3>Modificación de Video</h3></center>
            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <label for="title" class="form-label"> titulo</label>
            <input type="text" class="form-control mb-2" name="titulo" id="exampleFormControlInput1" placeholder="" value="{{ $videos->titulo }}">
            <label for="title" class="form-label"> descripcion</label>
            <textarea class="form-control mb-2" name="descripcion" id="exampleFormControlInput1" >{{ $videos->descripcion }}</textarea>
            <label for="title" class="form-label"> Fecha Carga </label>
            <input type="text" class="form-control @error('fecha_carga')is-invalid @enderror" id="datepicker"name="fecha_carga" value="{{$videos->fecha_carga}}">
          
       
<div class="control-group">
<input type="radio" id="reproductor" name="reproductor" value="1"    @if ($videos->reproductor == 1){{ 'checked '  }} @endif onclick="habilitarText1(this)">
     
Link Id
<input  class="form-control @error('link_id')is-invalid @enderror" @if ($videos->reproductor == 2){{'disabled';  }} @endif  id="txt1"name="link_id" value="@if ($videos->reproductor == 1){{$videos->link_id;  }} @endif"  type="text"  />
@error('link_id')
<span class="invalid-feedback ">
<strong class="alert-danger">
{{$message}}
</strong></span> 
@enderror
</div>
<div class="control-group">
       Link Youtube
      <input  class="form-control @error('link_video')is-invalid @enderror"  @if ($videos->reproductor == 2){{'disabled';  }} @endif id="txt3"name="link_video"  value="@if ($videos->reproductor == 1){{$videos->link_video;  }} @endif" type="text"  />
      @error('link_video')
      <span class="invalid-feedback ">
      <strong class="alert-danger">
      {{$message}}
      </strong></span> 
      @enderror
</div>
            <div class="control-group">
            link imagen
            <input class="form-control @error('link_img')is-invalid @enderror" @if ($videos->reproductor == 2){{'disabled';  }} @endif id="txt5"name="link_img" value="@if ($videos->reproductor == 1){{$videos->link_img;  }} @endif"  type="text"  />
             @error('link_img')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror
        </div>
            <br>
      <input type="radio" id="reproductor" name="reproductor" value="2"    @if ($videos->reproductor == 2){{'checked ';  }} @endif onclick="habilitarText2(this)">
            <label for="dailymotion">Link Dailymotion
            </label>
            <div class="control-group">
            link video
            <input  class="form-control @error('link_video')is-invalid @enderror" id="txt2" @if ($videos->reproductor == 1){{'disabled';  }} @endif name="link_video2" value="@if ($videos->reproductor == 2){{$videos->link_video }}@endif"  type="text"  />
        @error('link_video2')
        <span class="invalid-feedback ">
        <strong class="alert-danger">
        {{$message}}
        </strong></span> 
        @enderror    
        </div>
            <div class="control-group">
            link imagen
            <input  class="form-control @error('link_img')is-invalid @enderror" id="txt4"name="link_img2" @if ($videos->reproductor == 1){{'disabled';  }} @endif value="@if ($videos->reproductor == 2){{ $videos->link_img }}@endif" type="text"  />
            @error('link_img2')
            <span class="invalid-feedback ">
            <strong class="alert-danger">
            {{$message}}
            </strong></span> 
            @enderror     
        </div>      
<br>
</div>
 
<label for="id_categoria" class="form-label">Categorias</label>
    <select name="id_categoria" class="form-select">
    <option >Seleccione una Categoría</option>
    @foreach ($categorias as $categoria)

    @if ($categoria->id== $videos->id_categoria)
    <option value="{{$categoria->id}}" selected>{{$categoria->titulo}}</option>
    @else
    <option value="{{$categoria->id}}" >{{$categoria->titulo}}</option>
    @endif
  @endforeach
    </select>

    <div class="control-group">
    <label for="exampleInput">
    Publicado
    </label>
<div class="form-check">
  <input class="form-check-input " type="radio" name="publicado" id="publicado1" value="1"    @if ($videos->publicado == 1){{ 'checked' }} @endif>
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="publicado" id="publicado2" value="0"    @if ($videos->publicado == 0){{ 'checked' }} @endif >
  No

</div>
</div>

<div class="control-group">
    <label for="exampleInput">
    Destacado
    </label>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado1" value="1"    @if ($videos->destacado == 1){{ 'checked' }} @endif>
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="destacado" id="destacado2" value="0"    @if ($videos->destacado == 0){{ 'checked' }} @endif >
 
  No
 
</div>
</div>
<center><button type="submit" class="btn btn-primary">
                Aceptar
            </button>   </center>
    

          
          </div>
    </form>

    
   
</div>

 </div>
    <div class="col-md-4">
    </div>
</div>


@endsection
