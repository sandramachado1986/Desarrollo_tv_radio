@extends('app')
@section('content')

@if($message = Session::get('success'))
<div class="alert alert-info alert-dismissible fade in" role="alert">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
    </button>
    <strong>Success!</strong> {{ $message }}
</div>
@endif

{!! Session::forget('success') !!}
<br>
<br><br>

<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-2">
        <strong>Nueva Imágen</strong>
        <button type="button" class="btn btn-success">
            <a  href={{route('imagenes.create')}}><i class="fa-solid fa-plus">
                </i></a>
        </button>
    </div>

    <div class="col-md-8">
 </div>
    <div class="col-md-1">
    </div>
</div>

<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <table class="table table-responsive table-bordered" id="tabla_imagenes">
        <thead>
        <tr>
        <th>id</th>
        <th>T&iacute;tulo</th>
        <th>Imagen</th>
        
        
        <th>
        Eliminar
        </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($imagenes as $imagen)
        <tr>
        <td>{{$imagen->id}}</td>
        <td>
        {!! Str::limit($imagen->titulo,10, ' ...') !!}
        </td>
        <td>{{$imagen->file}}</td>
        
       
        <td><a  class="href">
            <form action={{ route('imagenes-destroy', [$imagen->id]) }} method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger "><i class="fa-solid fa-trash-can"></i></button>
        </form>
    </a>
        </td>
        </tr>
        @endforeach
        </tbody>
        </table>

    </div>
    <div class="col-md-1">
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function() {
        $('#tabla_imagenes').DataTable({
            language: {
                search: "buscar:",
                "lengthMenu": "Mostrar _MENU_ registros",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ registros",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Próximo",
                    "previous": "Anterior"
                }
            }
        });
    });
</script>


@endsection