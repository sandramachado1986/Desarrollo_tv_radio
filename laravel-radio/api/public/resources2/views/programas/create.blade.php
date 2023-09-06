@extends('app')
@section('content')

<div class="row">
    <div class="col-md-3">
    </div>
    <div class="col-md-6" style="border:solid #f7f7f9;">
        <center><h3>Crear un Programa</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('programas')}}" method="POST"novalidate enctype="multipart/form-data">
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
<label class="control-label">Imagen</label>
<input   class="form-control @error('file')is-invalid @enderror" id="imagen" type="file" name="imagen" accept="image/*" value=""/>
@error('imagen')
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