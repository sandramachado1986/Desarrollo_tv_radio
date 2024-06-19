@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" style="border:solid #f7f7f9;">
      <center><h3>Crear Programación</h3></center>
    @if (Session::has('success'))
    <div class="alert alert-secondary" role="alert">
    {{session::get('success')}}
    </div>
    @endif

        <form role="form"  action="{{route('cargar_programacion')}}" method="POST"  enctype="multipart/form-data">
        @csrf
        <div class="form-group">

        <label for="exampleInput">
        Programas
        </label>
        
        <select class="form-control" name="id_programa" aria-label=".form-select-lg example">
        <option selected>Seleccione un Programa</option>
        @foreach ($programas as $programa)
        <option value="{{$programa['id']}}">{{$programa['descripcion']}}</option>
        @endforeach
        </select>

        </div>
      
        <div class="form-group">
        <label for="exampleInput">
        Dia 
        </label>
        <select class="form-control"  name="id_dia" aria-label=".form-select-lg example">
        <option selected>Seleccione un Día</option>
        @foreach ($dias as $dia)
        <option value="{{$dia['id']}}">{{$dia['descripcion']}}</option>
        @endforeach
        </select>
        </div>
        <div class="form-group">
        <label for="exampleInput">
        Hora 
        </label>
        <select class="form-control" name="id_horario" aria-label=".form-select-lg example">
        <option selected>Seleccione un horario</option>
        @foreach ($horarios as $hora)
        <option value="{{$hora['id']}}">{{$hora['descripcion']}}</option>
        @endforeach
        </select>
        </div>
        <div class="control-group">
    <label for="exampleInput">
    Visible
    </label>
<div class="form-check">
  <input  class="form-check-input" type="radio" name="visible" id="visible1" value="1">
    Si
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="visible" id="visible2" value="0" >
  
  No
  
</div>
</div>
        <div class="control-group">
    <center>
    <button type="submit" class="btn btn-primary">
    Aceptar
    </button>
    </center>
        </div>
        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
@endsection