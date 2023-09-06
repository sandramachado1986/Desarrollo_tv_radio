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
    <div class="col-md-2" style="padding-bottom:7px;">
        <strong>Nuevo Usuario</strong>
        <button type="button" class="btn btn-success">
            <a  href={{route('usuarios.create')}}><i style="text-decoration:none; color:white;" class="fa-solid fa-plus">
                </i></a> </br>
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
        <table class="table table-responsive table-bordered" id="tabla">
        <thead>
        <tr>
        <th>Nombre</th>
     <th>
        Editar
        </th>
        <th>
        Eliminar
        </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($usuarios as $usuario)
        <tr>
        <td>{{$usuario->name}}</td>
        <td>
        <form action="{{ route('usuarios-edit', [$usuario->id]) }}" method="patch">
        @method('patch')
        @csrf
        <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
        </form>
        </td>
        <td><a ><form action="{{ route('usuarios-destroy', [$usuario->id]) }}" method="POST">
        @method('DELETE')
        @csrf
        <button class="btn btn-danger "><i class="fa-solid fa-trash-can"></i></button>
        </form></a>
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
        $('#tabla').DataTable({
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