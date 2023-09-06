@extends('frontend.frontend')
@section("contenido")

<div class="carousel slide" id="carousel-544914">
<ol class="carousel-indicators">
        @foreach ($inicio as $key => $slide)
            <li data-slide-to="{{ $key }}" data-target="#carousel-544914" class="{{ $key == 0 ? 'active' : '' }}"></li>
        @endforeach
    </ol>
				<div class="carousel-inner">
                @foreach ($inicio as $key => $slide)
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
            <img class="d-block w-100" alt="Carousel Image {{ $key }}" src="{{'storage/'.$slide->imagen }}" />
                <div class="carousel-caption">
                    <h4>{{ $slide->titulo }}</h4>
                    <p>{{ $slide->description }}</p>
                </div>
            </div>
        @endforeach
					
					
					
				</div>
                 <a class="carousel-control-prev" href="#carousel-544914" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-544914" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
			</div>


	

        
		

  @endsection