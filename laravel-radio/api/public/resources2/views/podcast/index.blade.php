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
        <strong>Nuevo Podcast</strong>
        <button type="button" class="btn btn-success">
            <a   href={{route('podcast.create')}}><i class="fa-solid fa-plus">
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
        <table class="table table-responsive table-bordered" id="tabla_podcast">
        <thead>
        <tr>
        <th>titulo</th>
        <th>descripcion</th>
    
        <th>
        Editar
        </th>
        <th>
        Eliminar
        </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($podcast as $podcast)
        <tr>
        <td>{{$podcast->titulo}}</td>
     
        <td>
        {!! Str::limit($podcast->descripcion,30, ' ...') !!}
        </td>

        <td>

        <form action="{{ route('podcast-edit', [$podcast->id]) }}" method="patch">
        @method('patch')
        @csrf
        <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
        </form>

        </td>
        <td><a href="" class="href"><form action="{{ route('podcast-destroy', [$podcast->id]) }}" method="POST">
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
        $('#tabla_podcast').DataTable({
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