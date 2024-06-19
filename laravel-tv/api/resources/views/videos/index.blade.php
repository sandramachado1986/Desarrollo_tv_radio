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
        <strong>Nuevo Video</strong>

        <button type="button" class="btn btn-success">
            <a  href="{{route('videos.create')}}"><i class="fa-solid fa-plus">
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
        <table class="display" id="tabla" >
            <thead>
                <tr>
                    <th>id</th>
                    <th>T&iacute;tulo</th>
                    <th>Link Video</th>
                    <th>Categoria</th>
                    <th>Publicado</th>
                    <th>Destacado</th>
                    <th>Vivo</th>
                    <th>
                        Editar
                    </th>
                    <th>
                        Eliminar
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($videos as $video)
                <tr>
                    <td>{{$video->id}}</td>
                    <td>



                        {!! Str::limit($video->titulo, 50, ' ...') !!}

                    </td>
                    <td>{{$video->link_video}}</td>
                    <td>@if ($video->id_categoria == null)
                       sin categoria 
                        @else
                        {{$video->categoria}}
                        
                    @endif</td>
                    <td>
                        @if($video->publicado == 0)
                        <i class='fa fa-remove' style='color: red;'></i>
                        @else
                        <i class='fa fa-check' style='color: #24CF1B;'></i>
                        @endif
                    </td>
                    <td>
                        @if($video->destacado == 0)
                        <i class='fa fa-remove' style='color: red;'></i>
                        @else
                        <i class='fa fa-check' style='color: #24CF1B;'></i>
                        @endif
                    </td>
                    <td>
                        @if($video->vivo == 0)
                        <i class='fa fa-remove' style='color: red;'></i>
                        @else
                        <i class='fa fa-check' style='color: #24CF1B;'></i>
                        @endif
                    </td>
                    <td>
<form action="{{ route('videos-edit', [$video->id]) }}" method="patch">
                        @method('patch')
                        @csrf
                        <button class="btn btn-info"><i class="fa-solid fa-pen-to-square"></i></button>
                    </form>
                      
                    </td>
                    <td><a href="" class="href"><form action="{{ route('videos-destroy', [$video->id]) }}" method="POST">
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
$(document).ready(function () {
    $('#tabla').DataTable({
        search: {
            return: true,
        },
    });
});
</script>


@endsection