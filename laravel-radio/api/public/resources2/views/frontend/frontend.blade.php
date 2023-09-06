<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Radio Universidad</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="../resources/views/css/bootstrap.min.css" rel="stylesheet">
    <link href="../resources/views/css/style.css" rel="stylesheet">
    <link href="../resources/views/fontawesome-free-6.2.1-web/css/fontawesome.css" rel="stylesheet">
    <link href="../resources/views/fontawesome-free-6.2.1-web/css/brands.css" rel="stylesheet">
    <link href="../resources/views/fontawesome-free-6.2.1-web/css/solid.css" rel="stylesheet">
	  <!-- Load the Twitch embed script -->
<script src="https://player.twitch.tv/js/embed/v1.js"></script>


  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Create a Twitch.Player object. This will render within the placeholder div -->

<style>
.card-header
{
	background-color: white;
}

</style>
  </head>
  <body>

    <div class="container-fluid">
	<div class="row" style="background-color: #476e96;">
		<div class="col-md-2">
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-4">
			<div class="btn-group" role="group">
				 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
					<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="https://canal.mdp.edu.ar/">CANAL</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
						<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="https://radio.mdp.edu.ar/">RADIO</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
						<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="https://www.mdp.edu.ar/index.php/gestion/secretaria-de-comunicacion-y-rrpp/64-red-enlace/revista-enlace">ENLACE</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
						<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="https://portaluniversidad.org.ar/">PORTAL</a>
				</button>
			</div>
		</div>
		<div class="col-md-3">
			<div class="btn-group" role="group">
			<a  target="_blank" href="https://www.facebook.com/unmdp"><i class="fa-brands fa-facebook red-social"></i></a>
			<a target="_blank"href="https://www.youtube.com/canalunmdp"><i class="fa-brands fa-youtube red-social "></i></a>
			<a href="https://www.instagram.com/unmdp_oficial/"><i class="fa-brands fa-instagram red-social"></i></a>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-2" style="padding-top:3%;padding-bottom:2%;">
	<a href="/radio/public/" > <img class="img-logo-radio"  style ="width:200px;"alt="Radio Universidad" src="../resources/views/img/radiohorizontal.png"></a>
		</div>
		<div class="col-md-1">
		</div>
		<div class="col-md-2"  style="padding-top:2%;padding-bottom:2%;">
		<a target="_blank" href="https://www.mdp.edu.ar/" class="">	<img class="img-logo-universidad" style ="width: 200px;
    padding-top: 12%;" alt="Universidad Nacional Mar del Plata" src="{{asset('/resources/views/img/logo-universidad-nacional-mdp.png')}}"
	
	"></a>
		</div>
		<div class="col-md-2">
		</div>
		<div class="col-md-4">
		</div>
	</div>
		<div class="row" style="background-color: #476e96;">
			<div class="col-md-1">
			</div>
		
		<div class="col-md-6">
			<div class="btn-group" role="group">
				
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
					<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="{!!URL::to('show_institucional')!!}">INSTITUCIONAL</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
					<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="{!!URL::to('show_contactos')!!}">CONTACTOS</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
					<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="{!!URL::to('show_programacion')!!}">PROGRAMACION</a>
				</button> 
				<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
					<a target="_blank" style="border:none;background-color: #476e96;color:white; text-decoration:none;"href="{!!URL::to('show_podcast')!!}">PODCAST</a>
				</button> 
				
				
			</div>
		</div>
		
		
		<div class="col-md-5">
			<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
			<a style="border:none;background-color: #476e96;color:white;text-decoration:none;" target="_blank" href="{!!URL::to('show_radiovivo')!!}"><i style="color:#e75253" class="fa-regular fa-radio"></i>&nbsp;RADIO EN VIVO</a>
			</button>
			<button class="btn btn-secondary" type="button" style="border:none;background-color: #476e96;color:white;">
			<a style="border:none;background-color: #476e96;color:white;text-decoration:none;" target="_blank" href="{!!URL::to('show_videovivo')!!}"><i style="color:#e75253" class="fa-solid fa-video"></i>&nbsp;VIDEO EN VIVO</a>
		</button>
		</div>
	</div>
	


	<div class="row">
		<div class="col-md-8">
			
		@yield("contenido")
		</div>
		<div class="col-md-4">

		<div id="twitch-embed"></div>
		<div id="accordion">

<div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="card-link" data-toggle="collapse" href="#collapseOne">
       Lunes
      </a>
    </div>
    <div id="collapseOne" class="collapse " data-parent="#accordion">

	 @foreach ($programacionLunes as $programacionLunes)
	<div class="card-body">
	
	{{$programacionLunes->horario}}
	{{$programacionLunes->programa}}
	</div>
	@endforeach

      
	  
	 
    </div>
  </div>
    <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="card-link" data-toggle="collapse" href="#collapseTwo">
       Martes
      </a>
    </div>
    <div id="collapseTwo" class="collapse " data-parent="#accordion">
       @foreach ($programacionMartes as $programacionMartes)
	<div class="card-body">
	
	{{$programacionMartes->horario}}
	{{$programacionMartes->programa}}
	</div>
	@endforeach
    </div>
  </div>
    <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="card-link" data-toggle="collapse" href="#collapseThree">
       Miércoles
      </a>
    </div>
    <div id="collapseThree" class="collapse " data-parent="#accordion">
      
@foreach ($programacionMiercoles as $programacionMiercoles)
<div class="card-body">
{{$programacionMiercoles->horario}}
{{$programacionMiercoles->programa}}
</div>
@endforeach
    </div>
  </div>
    <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="card-link" data-toggle="collapse" href="#collapseFour">
       Jueves
      </a>
    </div>
    <div id="collapseFour" class="collapse " data-parent="#accordion">
      
		@foreach ($programacionJueves as $programacionJueves)
		<div class="card-body">
		{{$programacionJueves->horario}}
		{{$programacionJueves->programa}}
		</div>
		@endforeach
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="card-link" data-toggle="collapse" href="#collapseFive">
       Viernes
      </a>
    </div>
    <div id="collapseFive" class="collapse " data-parent="#accordion">
     	@foreach ($programacionViernes as $programacionViernes)
		<div class="card-body">
		{{$programacionViernes->horario}}
		{{$programacionViernes->programa}}
		</div>
		@endforeach
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseSix">
       Sábado
      </a>
    </div>
    <div id="collapseSix" class="collapse" data-parent="#accordion">
     @foreach ($programacionSabado as $programacionSabado)
		<div class="card-body">
		{{$programacionSabado->horario}}
		{{$programacionSabado->programa}}
		</div>
		@endforeach
    </div>
  </div>

  <div class="card">
    <div class="card-header">
      <a style="text-decoration: none;color:black;" class="collapsed card-link" data-toggle="collapse" href="#collapseSeven">
       Domingo
      </a>
    </div>
    <div id="collapseSeven" class="collapse" data-parent="#accordion">
           @foreach ($programacionDomingo as $programacionDomingo)
		<div class="card-body">
		{{$programacionDomingo->horario}}
		{{$programacionDomingo->programa}}
		</div>
		@endforeach
    </div>
  </div>


</div>

		</div>
		
		
	</div>

		<div class="row">
		<div class="col-md-8">
			
		</div>
		<div class="col-md-3">
			



		</div>
		<div class="col-md-1">
		</div>
	</div>
</div>

<script src="../resources/views/js/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="../resources/views/js/popper.min.js"></script>
<script src="../resources/views/js/scripts.js"></script>

	


	<!-- Create a Twitch.Player object. This will render within the placeholder div -->
	<script type="text/javascript">
  new Twitch.Player("twitch-embed", {
    channel: "radiouniversidadunmdp"
  });
</script>
  </body>
</html>
