<!DOCTYPE html>
<html lang="en">
<head>
  <title>Radio administrador</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <script src="https://kit.fontawesome.com/3fc3212f17.js" crossorigin="anonymous"></script>
  <!-- datetimepicker css-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
  <!-- datetimepicker css-->
  <!-- datetimepicker javascript-->
  <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
  <script>
    $(function() {
      $("#datepicker").datepicker();
    });
  </script>
  <!-- datetimepicker-->
  <!-- radios-->
 
  
  <!-- radios-->
</head>

<body>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-inverse ">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Administración</a>
          </div>
          <ul class="nav navbar-nav">
          <li class="active"><a href="../public">Ver Sitio</a></li>
          <li><a href="{!!URL::to('institucional')!!}">Institucional</a></li>
          <li><a href="{!!URL::to('contactos')!!}">contactos</a></li>
          <li><a href="{!!URL::to('programas')!!}">Programas</a></li>
          <li><a href="{!!URL::to('podcast')!!}">Podcast</a></li>
          <li><a href="{!!URL::to('cargar_programacion')!!}">Cargar Programación </a></li>
          <li><a href="{!!URL::to('usuarios')!!}">Usuarios</a></li>

          <li><a  href="{!!URL::to('logout')!!}">Cerrar Sesión</a>
          </li>
          </ul>

        </nav>


   </div>
      
    </div>
    @yield('content')
  </div>


</body>

</html>