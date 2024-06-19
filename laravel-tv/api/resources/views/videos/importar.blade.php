@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4" style="border:solid #f7f7f9;">
        @if (Session::has('success'))
            <div class="alert alert-secondary" role="alert">
{{session::get('success')}}
</div>
        @endif

        <form role="form" action="{{route('videos-jsonimportado')}}" method="POST"novalidate enctype="multipart/form-data">
        @csrf
        <div class="form-group">
    <label for="exampleInput">
    Categorías
    </label>
    <select class="form-control" name="id_categoria" aria-label=".form-select-lg example">
    <option selected>Seleccione una Categoría</option>
    @foreach ($categorias as $categoria)
    <option value="{{$categoria['id']}}">{{$categoria['titulo']}}</option>
    @endforeach
    </select>
    </div>
        <div class="form-group">
        <label class="control-label">Importar Json</label>
        <input   class="form-control @error('filejson')is-invalid @enderror" id="filejson" type="file" name="filejson" accept="application/json" value="{{old('file')}}"/>
      @error('filejson')
        <span class="invalid-feedback ">
        <strong class="alert-danger">
        {{$message}}
        </strong></span> 
        @enderror
        </div>
        
       

        <div class="control-group">
            <center> <button type="submit" class="btn btn-primary">
        Aceptar
        </button></center>
       
        </div>
        </form>
    </div>
    <div class="col-md-4">
    </div>
</div>
@endsection