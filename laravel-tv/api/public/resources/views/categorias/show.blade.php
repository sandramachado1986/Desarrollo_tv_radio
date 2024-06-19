@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
  <center><h3>Modificar Categoría</h3></center>
    <form  method="POST" action="{{ route('categorias-update', ['id' => $categorias->id]) }}">
        @method('PATCH')
        @csrf
        
            @error('titulo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <label for="title" class="form-label"> titulo</label>
            <input type="text" class="form-control mb-2" name="titulo" id="exampleFormControlInput1" placeholder="" value="{{ $categorias->titulo }}">

            <label for="title" class="form-label"> descripcion</label>
            <textarea class="form-control mb-2" name="descripcion" id="exampleFormControlInput1" >{{ $categorias->descripcion }}</textarea>
    </br>
            <center>
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