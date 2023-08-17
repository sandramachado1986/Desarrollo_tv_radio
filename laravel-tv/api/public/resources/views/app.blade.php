<!DOCTYPE html>
<html lang="en">
<head>
  <title>Tv admin</title>
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
  <script type="text/javascript">
    function habilitarText1(obj) {
      if (obj.checked) {
        var text2 = document.getElementById('txt2');
        text2.disabled = true;
        var text4 = document.getElementById('txt4');
        text4.disabled = true;
        text2.value = "";
        text4.value = "";

        var text1 = document.getElementById('txt1');
        var text3 = document.getElementById('txt3');
        var text5 = document.getElementById('txt5');
        text1.removeAttribute('disabled');
        text3.removeAttribute('disabled');
        text5.removeAttribute('disabled');

      }
    }

    function habilitarText2(obj) {
      if (obj.checked) {
     
        var text1 = document.getElementById('txt1');
        var text3 = document.getElementById('txt3');
        var text5 = document.getElementById('txt5');
             text1.value = "";
        text3.value = "";
        text5.value = "";
        text1.disabled = true;
        text3.disabled = true;
        text5.disabled = true;
        text1.value = "";
        text3.value = "";
        text5.value = "";
        var text2 = document.getElementById('txt2');
        var text4 = document.getElementById('txt4');
        text2.removeAttribute('disabled');
        text4.removeAttribute('disabled');

      }
    }
  </script>
  
  <!-- radios-->
</head>

<body>


  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-inverse ">
          <div class="navbar-header">
            <a class="navbar-brand" href="#"></a>
          </div>
          <ul class="nav navbar-nav">
          <li class="active"><a href="#">Admin</a></li>
          <li><a href="{!!URL::to('videos')!!}">Videos</a></li>
          <li><a href="{!!URL::to('categorias')!!}">Categorias</a></li>
          <li><a href="{!!URL::to('imagenes')!!}">Imágenes</a></li>
          <li><a href="{!!URL::to('programas')!!}">Programas</a></li>
          <li><a href="{!!URL::to('cargar_programacion')!!}">Cargar Programación</a></li>
          <li><a href="{!!URL::to('videos/importar')!!}">Importar Videos</a></li>
          <li><a href="{!!URL::to('listaVideos')!!}">Tarjetas de Categorias</a></li>
          <li><a href="{!!URL::to('usuarios')!!}">Usuarios</a></li>
          <li><a href="{!!URL::to('videos/vivo')!!}">Vivo</a></li>
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