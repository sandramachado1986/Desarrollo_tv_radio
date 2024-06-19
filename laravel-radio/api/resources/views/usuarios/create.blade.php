@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" style="border:solid #f7f7f9;">
        <center><h3>Creación de Usuarios</h3></center>
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('usuarios')}}" method="POST"novalidate>
            @csrf
            <div class="form-group">
                <label for="exampleInput">
                    Nombre
                </label>
                <input type="text" class="form-control @error('name')is-invalid @enderror" id="name" name="name" value="{{old('name')}}"/>
                @error('name')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInput">
                    Email
                </label>
                <input type="email" class="form-control @error('email')is-invalid @enderror" id="email" name="email" value="{{old('email')}}"/>
                @error('email')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInput">
                    Contraseña
                </label>
                <input type="password" class="form-control @error('password')is-invalid @enderror" id="password" name="password" value="{{old('password')}}"/>
                @error('password')
                <span class="invalid-feedback ">
                <strong class="alert-danger">
                {{$message}}
                </strong></span> 
                @enderror
            </div>

           
              <div class="control-group">
                <center>
            <button type="submit" class="btn btn-primary">
                Aceptar
            </button></center>
            
            </div>
        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
@endsection