@extends('app')
@section('content')

<div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-8">
          <center><h3>Contactos</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('contactos')}}" method="POST"novalidate>
            @csrf
           
            <div class="form-group">
            <label for="exampleInput">
            Descripcion
            </label>
            <textarea cols="40" rows="30" style="resize: both;"class="form-control @error('descripcion')is-invalid @enderror" id="descripcion"name="descripcion" >{{ $contactos->descripcion }}</textarea>
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