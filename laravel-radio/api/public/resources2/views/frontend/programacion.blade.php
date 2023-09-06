
@extends('frontend.frontend')
@section("contenido")
	<div class="row">
	

          @foreach ($programacion as $programacion)
		
<div class="col-md-3" style="padding: 10px;">
	
<div class="card">
  <img   style ="width:50 px; height:220px;"alt=" {!! Str::limit($programacion->programa,30, ' ...') !!}" class="card-img-top" src="../public{{$programacion->imagen}}" alt="Card image cap">
  <div class="card-body"style="background-color: #717276; color:white;">
    <p class="card-text" >
		
				<a class="btn" style="text-decoration: none;color:white;" href="{{ route('show_programa_contextual', ['id' => $programacion->id_programa]) }}"> {!! Str::limit($programacion->programa,30, ' ...') !!}</a>
	</br>
			
				 {!! Str::limit($programacion->dia,10, ' ...') !!}
                 {!! Str::limit($programacion->horario,10, ' ...') !!}
		
			
				
			
</p>
  </div>
</div>
	 	</div>

       
        @endforeach
		
		</div>
	
		


  @endsection