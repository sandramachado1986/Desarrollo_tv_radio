@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-md-4">
            <center><h3>Modificación del Programa</h3></center>

            <form  method="POST" action="{{ route('programas-update', ['id' => $programas->id]) }}" >
            @method('PATCH')
            @csrf
            @error('descripcion')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if (session('success'))
            <h6 class="alert alert-success">{{ session('success') }}</h6>
            @endif

            <label for="title" class="form-label"> descripcion</label>
            <input type="text" class="form-control mb-2" name="descripcion" id="exampleFormControlInput1" placeholder="" value="{{ $programas->descripcion }}">
            <center>
            </br>
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