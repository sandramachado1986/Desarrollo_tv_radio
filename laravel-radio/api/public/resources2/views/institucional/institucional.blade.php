@extends('app')
@section('content')

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
          <center><h3>Editar Institucional</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('institucional')}}" method="POST"novalidate>
            @csrf
            <div class="form-group">
                <label for="exampleInput">
                    Titulo
                </label>
                <input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" value="{{$institucional->titulo}}"/>
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
            <textarea cols="40" rows="30" style="resize: both;" class="form-control @error('descripcion')is-invalid @enderror" id="descripcion"name="descripcion" value="{{$institucional->descripcion}}">{{$institucional->descripcion}}</textarea>
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
            </button>
            </center>
            </div>
        </form>
    </div>
    <div class="col-md-2">
    </div>
</div>
@endsection