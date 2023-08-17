@extends('app')
@section('content')

<div class="row">
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
        <center><h3>Actualizar el Vivo</h3></center>
        @if (Session::has('success'))
        <div class="alert alert-secondary" role="alert">
        {{session::get('success')}}
        </div>
        @endif
        <form role="form" action="{{route('videos-guardarvivo')}}" method="POST"novalidate enctype="multipart/form-data">
        @csrf
        <div class="form-group">
        <label for="exampleInput">
        Videos
        </label>
        <select class="form-select form-select-lg mb-3" name="id_video" aria-label=".form-select-lg example">
        <option selected>Seleccione el video para el vivo</option>
        @foreach ($videos as $video)
        @if ($video['vivo']=="1")
        <option value="{{$video['id']}}" selected>{{$video['titulo']}}</option>
        @else
        <option value="{{$video['id']}}">{{$video['titulo']}}</option>
        @endif

@endforeach
</select>
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