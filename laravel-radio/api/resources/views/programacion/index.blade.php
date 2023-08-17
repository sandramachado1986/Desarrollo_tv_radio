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
    <div class="col-md-3">
        <strong>Nueva Programacion</strong>
        <button type="button" class="btn btn-success">
            <a   href={{route('cargar_programacion.create')}}> <i class="fa-solid fa-plus">
                </i></a>
        </button>
    </div>

    <div class="col-md-7">
 </div>
    <div class="col-md-1">
    </div>
</div>

<div class="row">
    <div class="col-md-1">
    </div>
    <div class="col-md-10">
        <table class="table table-responsive table-bordered" id="tabla_programacion">
        <thead>
        <tr>
        <th>Programa</th>
        <th>Día</th>
        <th>Horario</th>
        <th>
        Eliminar
        </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($programacion as $programacion)
        <tr>
        <td>
        {!! Str::limit($programacion->programa,30, ' ...') !!}
        </td>
          <td>
        {!! Str::limit($programacion->dia,10, ' ...') !!}
        </td>
          <td>
        {!! Str::limit($programacion->horario,10, ' ...') !!}
        </td>

        <td><a><form href="" class="href" action="{{ route('cargarprogramacion-destroy', [$programacion->id]) }}" method="POST">
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
        $('#tabla_programacion').DataTable({
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