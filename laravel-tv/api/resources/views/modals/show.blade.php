@extends('app')

@section('content')
<div class="row">
    <div class="col-md-4">
    </div>
        <div class="col-md-4">
<form  method="POST" action="{{ route('modals-update', ['id' => $modals->id]) }}"enctype="multipart/form-data">
@method('PATCH')
@csrf

<div class="form-group">
<label for="exampleInput">
Titulo
</label>
<input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" value="{{$modals->titulo}}"/>
@error('titulo')
<span class="invalid-feedback ">
<strong class="alert-danger">
{{$message}}
</strong></span> 
@enderror
</div>
<div class="form-group">
<label for="exampleInput">
Titulo
</label>
<input type="text" class="form-control @error('titulo')is-invalid @enderror" id="titulo"name="titulo" value="{{$modals->titulo}}"/>
@error('titulo')
<span class="invalid-feedback ">
<strong class="alert-danger">
{{$message}}
</strong></span> 
@enderror
</div>

<div class="form-group">
<label class="control-label">Imagen</label>
<input   class="form-control @error('file')is-invalid @enderror" id="imagen" type="file" name="imagen" accept="image/*" value="{{$modals->file}}"/>
<br />
@error('file')
<span class="invalid-feedback ">
<strong class="alert-danger">
{{$message}}
</strong></span> 
@enderror
</div>

<center>
<br>
	<button type="submit" class="btn btn-primary">
Aceptar
</button>  </center>
</form>
        </div>
        <div class="col-md-4">
    </div>
    </div>
    

@endsection