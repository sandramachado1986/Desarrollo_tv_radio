@extends('home')
@section('content')
	<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
			<h3>
				<center>Radio - Administración</center>
			</h3>
		</div>
		<div class="col-md-4">
		</div>
	</div>
<div class="row">
		<div class="col-md-4">
		</div>
		<div class="col-md-4">
<div class="jumbotron">
<div class="alert alert-info">
Por favor, ingrese su usuario y contraseña.
</div>
<form  method="POST" action="{{route('login')}}">
@csrf
@error('usuario')
<div class="alert alert-danger">{{ $message }}</div>
@enderror

@if (session('success'))
<h6 class="alert alert-success">{{ session('success') }}</h6>
@endif
<i class="fa-solid fa-user"></i>
<label for="title" class="form-label"> Usuario</label>
<input type="text" class="form-control mb-2" name="name" id="exampleFormControlInput1" placeholder="">
<i class="fa-solid fa-key"></i>
<label for="title" class="form-label"> Contraseña</label>
<input type="password" class="form-control mb-2" name="password" id="exampleFormControlInput1" placeholder="">
<center></br><button type="submit" class="btn btn-primary">
Aceptar
</button>  </center>
</form>
</div>
		</div>
		<div class="col-md-4">
		</div>
	</div>

@endsection