<!doctype html>
<html lang="es">

    <head>
        <!-- Add to home screen for Safari on iOS -->
        <link rel="alternate" hreflang="es" href=""/>
        <link rel="icon" type="image/png" href="iconos/144.jpg"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <meta name="apple-mobile-web-app-title" content=" Radio Universidad | UNMDP ">
        <link rel="apple-touch-icon" href="../resources/views/frontend_radio_news/iconos/512.jpg">
        <meta name="msapplication-TileImage" content="../resources/views/frontend_radio_news/iconos/512.jpg">
        <meta name="msapplication-TileColor" content="#062d70">
        <meta name="theme-color" content="#f0f0f0">

        <!-- Esenciales META Tags -->
        <!-- fbk 1200x630px /1.91:1 twtr -1mb -->

        <meta property="og:title" content="Radio Universidad | UNMDP">
        <meta property="og:description" content="Todos los servicios, una cooperativa">
        <meta property="og:image" content="iconos/512.jpg">
        <meta property="og:url" content="">
        <meta name="twitter:card" content="summary_large_image">

        <!-- No esenciales, peeero... -->

        <meta property="og:site_name" content="Radio Universidad | UNMDP ">
        <meta name="twitter:image:alt" content="Alt texto para imagen">

        <!-- No esenciales,si para Analytics -->

        <meta property="fb:app_id" content="your_app_id"/>
        <meta name="twitter:site" content="@website-username">

        <!-- fin META Tags sociales -->

        <meta charset="utf-8">
        <meta
            name="viewport"
            content="height=device-height,
                      width=device-width, initial-scale=1.0,
                      minimum-scale=1.0, maximum-scale=1.0,
                      user-scalable=no, target-densitydpi=device-dpi">
        <title>Radio Universidad | UNMDP
        </title>
        <meta name="description" content="8aDG">
        <meta name="author" content="8aDG">
        <script
            src="https://code.jquery.com/jquery-2.0.3.min.js"
            integrity="sha256-sTy1mJ4I/LAjFCCdEB4RAvPSmRCb3CU7YqodohyeOLo="
            crossorigin="anonymous"></script>
        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script src="../resources/views/frontend_radio_news/js/jquery.swipebox.js"></script>
        <script src="../resources/views/frontend_radio_news/js/modal.js"></script>
        <script
            src="https://unpkg.com/@lottiefiles/lottie-interactivity@latest/dist/lottie-interactivity.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/normalize.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/slide.css">


        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/grilla.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/tipografia.min.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/estilos_generales.min.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/swipebox.css">
        <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css/>
        <link rel="stylesheet" type="text/css" href="../resources/views/frontend_radio_news/css/panel_deslizable.min.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/modal.css">
        <link rel="stylesheet" href="../resources/views/frontend_radio_news/css/player.min.css">

        <!-- fontawesome -->
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
            integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
            crossorigin="anonymous">
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
            rel="stylesheet">
        <!-- fontawesome -->

        <!--[if lt IE 9]> <script
        src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
        <![endif]-->
        <link rel="manifest" href="../resources/views/frontend_radio_news/manifest.json"/>

        <!-- scripts que no se ejecutan al final -->
        <!--script src="../resources/views/frontend_radio_news/js/index.js"></script!-->
        <script src="../resources/views/frontend_radio_news/sw.js"></script>

        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.33/moment-timezone-with-data.min.js"></script>

    </head>



  
    <body class="notLoaded">

    <a class="ir-arriba" href="#top" title="Volver arriba">
            <span class="fa-stack">
                <i class="fa fa-circle fa-stack-2x"></i>
                <i class="fa fa-arrow-up fa-stack-1x fa-inverse"></i>
            </span>
        </a>
        <div class="whatsapp">
            <a
                href="https://wa.me/+5492233052040/?text=%20Hola!%20Soy%20oyente%20del%20programa"
                class="button _center _bot-whap play-btn"
                target="_blank">
                <i class="fab fa-whatsapp"></i>
                <span class="gd">&nbsp;&nbsp;Comunicate</span></a>
        </div>
        <!--Boton hacia arriba-->
        <!--Notificacion de no conexion-->
        <div class="offline-notification ch">
            Parece que estas offline.
            <a href="/#">Que significa esto?</a>
            <div class="offline-notification_explanation">
                Vas a continuar viendo la app pero no se actualizará hasta que te conectes a
                internet.
            </div>
        </div>
        <!--Notificacion de no conexion-->
        <main>
            <container class="main-content transition-fade" id="swup">

                <nav class="col-6 top" style="z-index:9!important;">
                    <div class="row rowfixed">
                        <div class="_flex _25">
                            <div class="logo-canal">
                                <svg
                                    id="logo_canal_nuevo"
                                    width="71.391"
                                    height="81"
                                    version="1.1"
                                    viewbox="0 0 71.391 81"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <style type="text/css">
                                        #escudo.st0 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #062D70;
                                        }
                                        #ojo.st1 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #91D8F7;
                                        }
                                        #contraforma.st2 {
                                            fill-rule: evenodd;
                                            clip-rule: evenodd;
                                            fill: #17AFD5;
                                        }
                                    </style>
                                    <path
                                        id="cuerpo"
                                        class="st0"
                                        d="m71.391 45.305c0 19.713-15.983 35.695-35.697 35.695s-35.695-15.982-35.695-35.695v-43.932c0-0.75633 0.61752-1.3731 1.3731-1.3731h68.643c0.75633 0 1.3753 0.61677 1.3753 1.3731z"
                                        style="stroke-width:.075033"/>
                                    <path
                                        id="ojo"
                                        class="st1"
                                        d="m35.689 36.395h0.0083c5.4984 0 9.9538-4.4524 9.9538-9.9463s-4.4554-9.9478-9.9538-9.9478h-13.042c-0.75633 0-1.3738 0.61752-1.3738 1.3716v17.151c0 0.75483 0.61752 1.3716 1.3738 1.3716z"
                                        style="stroke-width:.075033"/>
                                    <path
                                        id="contraforma"
                                        class="st2"
                                        d="m22.655 40.511h9.6777c10.728 0 19.458 8.5372 19.838 19.181 0.02101 0.55599-0.583 0.71431-0.77584 0.71431h-28.813c-0.75408 0-1.3011-0.61752-1.3011-1.3731v-17.161c0-0.75483 0.61752-1.3611 1.3738-1.3611z"
                                        style="stroke-width:.075033"/>
                                </svg>
                            </div>
                        </div>

                        <div class="_flex _75">
                            <nav class="menu0">
                                <div id="usuarios" class="contmenu">
                                    <ul>
                                        <li ></li>
                                        <li class="bot_top">
                                            <div class="audio-player">
                                                <a
                                                    href="javascript:void() "
                                                    id="play-btn1"
                                                    class="button _center _bot-vivo play-btn">&nbsp;&nbsp;En vivo</a>
                                                <audio id="audio-player">
                                                    <source src="http://fm.mdp.edu.ar:8000/;stream.mp3" type="audio/mp3"></audio>

                                            </div>
                                        </li>

                                        <li>
                                            <a href="#0" class="_menu cd-btn js-cd-panel-trigger" data-panel="main">
                                                <div class="hoverEffects">
                                                    <lottie-player
                                                        src="../resources/views/frontend_radio_news/anim/menu_blanco.json"
                                                        style="height: 30px;width: 54px;"
                                                        speed="2"></lottie-player>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>

                                </div>

                            </nav>
                        </div>
                    </div>
                </nav>
                <!-- menudesktop navegacion y logo clase gd-->

                <header class="row col-6 hero_video rowfixed">
                    <video
                        class="fullscreen"
                        src="../resources/views/frontend_radio_news/media/target.mp4"
                        playsinline="playsinline"
                        autoplay="autoplay"
                        muted="muted"
                        loop="loop"></video>
                    <div class="row col-6  _isolate">
                        <div class="swiper swiper-container _marg_top27">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide _center">
                                    <div class="_pad27 row col-6 ">
                                        <div class="row col-3 _center">
                                            <div class="_marg_top27">
                                                <!-- <img src="iconos/badge.svg" alt="logo" style="height: 54px;margin-top:
                                                27px;"> -->
                                            </div>
                                        </div>
                                        <div class="row col-3">
                                            <h1 class="row col-6 _color_title _bold">95.7 FM en el dial de Mar del Plata
                                            </h1>
                                            <h3 class="_color_title">La radio pública de la zona</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide _center">
                                    <div class="_pad27 row col-6">
                                        <div class="row col-3 _center">
                                            <div class="_marg_top27">
                                                <!-- <img src="iconos/badge.svg" alt="logo" style="height: 54px;margin-top:
                                                27px;"> -->
                                            </div>
                                        </div>
                                        <div class="row col-3">
                                            <h1 class="row col-6 _color_title _bold">Producciones originales
                                            </h1>
                                            <h3 class="_color_title">Alta calidad con talentos locales
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide _center">
                                    <div class="_pad27 row col-6">
                                        <div class="row col-3 _center">
                                            <div class="_marg_top27">
                                                <!-- <img src="iconos/badge.svg" alt="logo" style="height: 54px;margin-top:
                                                27px;"> -->
                                            </div>
                                        </div>
                                        <div class="row col-3">
                                            <h1 class="row col-6 _color_title _bold">Espacio de diversidad</h1>
                                            <h3 class="_color_title">Pluralidad y contenidos para todas las voces</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide _center">
                                    <div class="_pad27 row col-6">
                                        <div class="row col-3 _center">
                                            <div class="_marg_top27">
                                                <!-- <img src="iconos/badge.svg" alt="logo" style="height: 54px;margin-top:
                                                27px;"> -->
                                            </div>
                                        </div>
                                        <div class="row col-3">
                                            <h1 class="row col-6 _color_title _bold">Todo el deporte y la actualidad</h1>
                                            <h3 class="_color_title">Del ámbito local como nacional</h3>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </header>





            
  <!-- slider o primera sección -->
            <div id="currentShowTemplate" class="current-show" style="display: none;">
                <div class="row col-3 _left">
                    <div class="row col-6">
                        <div class="row col-3 _pad27">
                            <figure class="_logo">
                                <svg
                                    id="logo_canal_nuevo"
                                    width="71.391"
                                    height="81"
                                    version="1.1"
                                    viewbox="0 0 71.391 81"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        id="cuerpo"
                                        class="st0"
                                        d="m71.391 45.305c0 19.713-15.983 35.695-35.697 35.695s-35.695-15.982-35.695-35.695v-43.932c0-0.75633 0.61752-1.3731 1.3731-1.3731h68.643c0.75633 0 1.3753 0.61677 1.3753 1.3731z"
                                        style="stroke-width:.075033"/>
                                    <path
                                        id="ojo"
                                        class="st1"
                                        d="m35.689 36.395h0.0083c5.4984 0 9.9538-4.4524 9.9538-9.9463s-4.4554-9.9478-9.9538-9.9478h-13.042c-0.75633 0-1.3738 0.61752-1.3738 1.3716v17.151c0 0.75483 0.61752 1.3716 1.3738 1.3716z"
                                        style="stroke-width:.075033"/>
                                    <path
                                        id="contraforma"
                                        class="st2"
                                        d="m22.655 40.511h9.6777c10.728 0 19.458 8.5372 19.838 19.181 0.02101 0.55599-0.583 0.71431-0.77584 0.71431h-28.813c-0.75408 0-1.3011-0.61752-1.3011-1.3731v-17.161c0-0.75483 0.61752-1.3611 1.3738-1.3611z"
                                        style="stroke-width:.075033"/>
                                </svg>
                            </figure>
                          

                        </div>
                       
                    </div>
                </div>
               

            </div>
               <!-- Template for displaying the next show -->

               
            <div class="row col-6 _marg-bt rowfixed"></div>
            <div class="row col-6 rowfixed">
                <div class="_color_blue _txt_left _marg-bt">
                    <div class="gd">
                        <h3 class="_color_blue _bold">
                            En el aire de la ciudad
                        </h3>
                    </div>
                    <div class="ch _pad27"></div>
                    <div class="_marg-27-m">
                        <h1 class="_nomarg">La radio en vivo</h1>
                    </div>
                </div>
            </div>
         
            <section>
            <div class="slideshow-container">
    @foreach ($programacion as $index => $item)
    @if ($index < 5)
    <div class="mySlides fade">
        <div class="slide-content" style=" display: flex;">
            <div class="sli" style="width:200px;">
                <div class="numbertext">{{ $index + 1 }} / {{ count($programacion) }}</div>
                <h4>{{ $item->show }} - {{ $item->day }} a {{ $item->time }}</h4>
            </div>
            <div class="imagen" >
                <img  src="{{ asset('' . $item->imageUrl) }}" style="width:200px;">
                <div class="text">Caption Text</div>
            </div>
              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    @endif
    @endforeach
  
</div>
<br>
<div style="text-align:center">
    @foreach ($programacion as $index => $item)
    @if ($index < 5)
        <span class="dot" onclick="currentSlide({{ $index + 1 }})"></span>
    @endif
    @endforeach
</div>
</section>

<section>
  
</section>

            
            

            

        

            <!-- sección varios-->
            <!-- sección noticias-->
              <!-- fin main-->
            <!-- footer-->
            
            </container>
    </main>          
<!-- fin copntenedor general-> <!-- ventanas modales -->

    <!-- ventanas modales -->
       <!-- menu lateral -->
       
    <!-- menu lateral -->
    <script src="../resources/views/frontend_radio_news/js/slide.js"></script>
    <script src="../resources/views/frontend_radio_news/js/app.js"></script>


    <script
        src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="../resources/views/frontend_radio_news/js/scripts.js"></script>
    <script src="../resources/views/frontend_radio_news/js/panel.js"></script>
    <script src="../resources/views/frontend_radio_news/js/player.min.js"></script>

    <script type="module">
        import 'https://cdn.jsdelivr.net/npm/@pwabuilder/pwaupdate';
        const el = document.createElement('pwa-update');
        document
            .body
            .appendChild(el);
    </script>

    <script
        defer="defer"
        src="https://use.fontawesome.com/releases/v5.5.0/js/regular.js"
        integrity="sha384-XrvTJeiQ46fxxPrZP6fay5yejA2FV4G1XsS8E4Piz6Fz+7FaEFTw7A7GR972irVV"
        crossorigin="anonymous"></script>
</body>

</html>