
@extends('frontend.frontend')
@section("contenido")

	<div class="row">
		

         @foreach ($podcast as $podcast)
		<div class="col-md-2">
			
			<h2>
				{{$podcast->titulo}}
			</h2>
			<p>
				{{$podcast->descripcion}}
			</p>
            <p>
				{{$podcast->fecha_publicacion}}
			</p>
			<p>
				<a class="btn" href="{{$podcast->link_podcast}}">Link Podcast»</a>
			</p>
		</div>
		
		@endforeach
		
	
		
	</div>

  @endsection