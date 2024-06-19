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
        <strong>Nueva  Targetas de Categoría</strong>
        <button type="button" class="btn btn-success">
            <a   href={{route('listaVideos.create')}}> <i style="color:white;"class="fa-solid fa-plus">
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
        <th>Titulo</th>
        <th>Categoría</th>
        <th>Imagen</th>
        <th>Visible</th>
        <th>Destacado</th>
        <th>
        Editar
        </th>
        <th>
        Eliminar
        </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($targetas as $targetas)
        <tr>
        <td>
        {{$targetas->titulo}}
        </td>
          <td>
        {{$targetas->categoria}}
        </td>
          <td>
        {{$targetas->imagen}}
        </td>
        <td>
        @if($targetas->visible == 0)
        <i class='fa fa-remove' style='color: red;'></i>
        @else
        <i class='fa fa-check' style='color: #24CF1B;'></i>
        @endif
        </td>
        <td>
        @if($targetas->destacado == "0")
        {{('Carousel');}}
        @else
        @if($targetas->destacado == "1")
         {{('1 columna');}}
           @else
        @if($targetas->destacado == "3")
         {{('3 columna');}}
          
          @endif
          @endif
        @endif
        </td>
        <td>
        <form action="{{ route('targetas-edit', [$targetas->id]) }}" method="patch">
        @method('patch')
        @csrf
        <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
        </form>
        </td>

        <td><a><form href="" class="href" action="{{ route('targeta-destroy', [$targetas->id]) }}" method="POST">
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