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

                <!--acaa-->




            
                      

            </div>
               <!-- Template for displaying the next show -->

                </div>


              


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
            <div class="row col-6 _center rowfixed">
                <div id="loadingIndicator">
                    <div class="fa-3x _flex _center">
                        <i class="fas fa-circle-notch fa-spin"></i>
                    </div>
                </div>

                <div id="currentShowContainer" class="row col-6 _section_incripcion"></div>

                <!-- sección varios-->

                <div class="row col-6 _center  _pad27 rowfixed">
                    <a
                        id="div_1"
                        href="https://open.spotify.com/show/37Zbsm0D8FBBMC4m6sukkv"
                        target="_blank"
                        class="button _bot-levels _color-inv _center _nomarg">
                        Toda la programación
                    </a>
                </div>
                <!-- sección noticias-->
            </div>

            
            <!-- segunda sección 2 columnas-->

              <section id="preinscripcion" style="height: 81px;display: none;">
                <div class="seccion1 rowfixed">
                    <div id="nextShowContainer"></div>
                </div>
            </section>
            <!-- segunda sección -->

            

             <!-- sección varios -->
             <section class="seccion2 row col-6">
                <div class="row col-6 rowfixed">
                    <div class="_color_blue _txt_left _marg-bt">
                        <div class="gd">
                            <h3 class="_color_blue _bold">
                                Todo el contenido a demanda
                            </h3>
                        </div>
                        <div class="ch _pad27"></div>
                        <div class="gd">
                            <h1>Podcasts de Radio Universidad</h1>
                        </div>
                        <div class="ch _marg-27-m">
                            <h1 class="h2 _nomarg">Podcasts de Radio Universidad</h1>
                        </div>
                    </div>
                </div>


                



                

















                <div class="row col-6">
                    <div class="Noticias swiper">
                        <div class="swiper-wrapper" id="varios">
                            <!--slide-->
                            <div class="swiper-slide" style="overflow: hidden;">
                                <div class="iframe-container-div _center">
                                    <!--card-->
                                    <iframe
                                        style="border-radius:12px"
                                        src="https://open.spotify.com/embed/episode/38Hs0jXovnnXSpAU1qppnw?utm_source=generator"
                                        width="100%"
                                        height="352"
                                        frameborder="0"
                                        allowfullscreen=""
                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                        loading="lazy"></iframe>
                                    <!--card-->
                                </div>
                            </div>
                            <!--slide-->
                            <!--slide-->
                            <div class="swiper-slide" style="overflow: hidden;">
                                <div class="iframe-container-div">
                                    <!--card-->
                                    <iframe
                                        style="border-radius:12px"
                                        src="https://open.spotify.com/embed/episode/2FosKA5ItSZyIWqW28hdEJ?utm_source=generator"
                                        width="100%"
                                        height="352"
                                        frameborder="0"
                                        allowfullscreen=""
                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                        loading="lazy"></iframe>
                                    <!--card-->
                                </div>
                            </div>
                            <!--slide-->
                            <!--slide-->
                            <div class="swiper-slide" style="overflow: hidden;">
                                <div class="iframe-container-div">
                                    <!--card-->
                                    <iframe
                                        style="border-radius:12px"
                                        src="https://open.spotify.com/embed/episode/2gd50l3w39RF4xKUGg9pFA?utm_source=generator"
                                        width="100%"
                                        height="352"
                                        frameborder="0"
                                        allowfullscreen=""
                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                        loading="lazy"></iframe>
                                    <!--card-->
                                </div>
                            </div>
                            <!--slide-->
                            <!--slide-->
                            <div class="swiper-slide" style="overflow: hidden;">
                                <div class="iframe-container-div">
                                    <!--card-->
                                    <iframe
                                        style="border-radius:12px"
                                        src="https://open.spotify.com/embed/episode/5BOcK7uJOPXg37AB2rEL3G?utm_source=generator"
                                        width="100%"
                                        height="352"
                                        frameborder="0"
                                        allowfullscreen=""
                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                        loading="lazy"></iframe>
                                    <!--card-->
                                </div>
                            </div>
                            <!--slide-->
                            <!--slide-->
                            <div class="swiper-slide" style="overflow: hidden;">
                                <div class="iframe-container-div">
                                    <!--card-->
                                    <iframe
                                        style="border-radius:12px"
                                        src="https://open.spotify.com/embed/episode/38Hs0jXovnnXSpAU1qppnw?utm_source=generator"
                                        width="100%"
                                        height="352"
                                        frameborder="0"
                                        allowfullscreen=""
                                        allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"
                                        loading="lazy"></iframe>
                                    <!--card-->
                                </div>
                            </div>
                            <!--slide-->

                        </div>
                        <br>
                        <br>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </section>

            <!-- sección varios-->
            <div class="row col-6 _center  _pad27 rowfixed">
                <a
                    id="div_1"
                    href="https://open.spotify.com/show/37Zbsm0D8FBBMC4m6sukkv"
                    target="_blank"
                    class="button _bot-levels _color-inv _center _nomarg">
                    Todos los podcast
                </a>
            </div>
            <!-- sección noticias-->
              <!-- fin main-->
            <!-- footer-->
            <footer id="footer" class="rowfixed">
                <div class="row col-88 pie">
                    <div>
                        <h5>Dirección</h5>
                        25 de Mayo 2855 - 9º piso
                        <br>
                        Mar del Plata | Bs As | AR
                        <br>
                        <a href="mailto:canal@mdp.edu.ar;">
                            radiouniversidad@mdp.edu.ar</a><br>
                        <a href="tel:+5490223">Móvil: +54 9 223 3052040</a>

                        <h5>Producción</h5>
                        <a href="tel:+5490223">Móvil: +54 9 223 3052040</a>
                        <h5>Nuetras redes</h5>
                        <div
                            style="display: grid;grid-template-columns: repeat(3, 1fr); width:160px;color: var(--site-link);fill:var(--site-link)">

                            <a href="https://twitter.com/" target="_blank" rel="noopener noreferrer">
                                <h1 class="_center">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        height="43"
                                        width="43"
                                        viewbox="0 0 512 512"><path
                                        d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                                </h1>
                            </a>

                            <a
                                href="https://www.facebook.com/"
                                target="_blank"
                                style="color: var(--site-link)">
                                <h1 class="_center">
                                    <i class="fab fa-facebook-square"></i>
                                </h1>
                            </a>

                            <a
                                href="https://www.instagram.com/"
                                target="_blank"
                                style="color: var(--site-link);text-decoration: none;">
                                <h1 class="_center">
                                    <i class="fab fa-instagram"></i>
                                </h1>
                            </a>

                        </div>

                    </div>
                    <div></div>
                    <div></div>
                    <div class="">
                        <figure style="margin-top:27px;padding-left: 5px;">
                            <img src="../resources/views/frontend_radio_news/img/logo-full.png" alt="logo" style="height:81px;">
                        </figure>
                    </div>
                </div>
            </footer>
            <!-- footer-->
             <!-- SUBfooter-->
             <div class="subfooter row col-6 rowfixed">
                <div class="col-1">
                    <figure class="_marg-27-m" style="margin-top:27px;height: 81px;">
                        <img src="../resources/views/frontend_radio_news/img/logo-unmdp-h.svg" alt="logo" style="height:36px;margin-top: 9px;">
                    </figure>
                </div>
                <div class="col-1 _center">
                    <small style="color:#062d70;">
                        <br>
                        Miembro de</small>
                </div>
                <div class="col-2 _center orgs">

                    <img src="../resources/views/frontend_radio_news/img/renau_.png" alt="">
                    <img src="../resources/views/frontend_radio_news/img/_cin.png" alt="">
                    <img src="../resources/views/frontend_radio_news/img/bacua_.png" alt="">
                </div>
                <div class="col-2 _center">
                    <img class="gd _marg-27" src="../resources/views/frontend_radio_news/img/sistema.png" alt="" style="height: 54px;">
                </div>
            </div>
            <!-- SUBfooter-->
            </container>
    </main>          
<!-- fin copntenedor general-> <!-- ventanas modales -->
<div id="modal_base" class="modal _color-notibox3 _txt-blanco">
        <img
            class="close"
            src="../resources/views/frontend_radio_news/img/Close.svg"
            height="24px"
            width="24px;"
            style="position: fixed!important;">
        <section>
            <div class="row col-6 rowfixed _center">
                <figure class="_logo">
                    <svg
                        id="logo_canal_nuevo"
                        width="81"
                        height="81"
                        version="1.1"
                        viewbox="0 0 21.431 21.431"
                        xmlns="http://www.w3.org/2000/svg"
                        style="height:54px;margin:54px;">
                        <path
                            id="cuerpo"
                            d="m19.959 12.028c0 5.1561-4.1758 9.3319-9.3254 9.3319-5.1496 0-9.3254-4.1758-9.3254-9.3254v-11.482c0-0.19605 0.16338-0.35942 0.35943-0.35942h17.939c0.19605 0 0.35943 0.16338 0.35943 0.35942v11.476z"
                            style="clip-rule:evenodd;fill-rule:evenodd;fill:#062d70;stroke-width:.06535"/>
                        <path
                            id="arriba"
                            d="m14.75 4.5003h-3.6139c-6.3521 0-8.404 8.0642-3.1695 11.084 0.28101 0.16338 0.22872 0.11109 0.032672-0.09803-2.0977-2.2088-0.86262-5.7835 2.5814-5.7835h4.1758c0.19605 0 0.35943-0.16337 0.35943-0.35942v-4.483c-0.006518-0.19605-0.16991-0.35943-0.36596-0.35943z"
                            style="clip-rule:evenodd;fill-rule:evenodd;fill:#f64b48;stroke-width:.06535"/>
                        <path
                            id="abajo"
                            class="st2"
                            d="m10.45 15.976c-1.4377 0-2.6009-1.1633-2.6009-2.6009 0-1.4377 1.1633-2.6009 2.6009-2.6009h4.3c0.19605 0 0.35943 0.16338 0.35943 0.35943v4.483c0 0.19605-0.16338 0.35943-0.35943 0.35943z"
                            style="clip-rule:evenodd;fill-rule:evenodd;fill:#ff8173;stroke-width:.06535"/>
                    </svg>
                </figure>
            </div>
            <div class="row col-8 rowfixed">
                <div class="_2.5 html-content">
                    <div class="col-6" style="text-align:center;">
                        <h3>Modal Base</h3>
                    </div>
                    <div class="row col-6 grilla_d"></div>
                </div>
            </div>
        </section>
        <div style="clear: both;"></div>
    </div>
    <!-- ventanas modales -->
       <!-- menu lateral -->
       <div class="cd-panel cd-panel--from-right js-cd-panel-main">
        <div class="cd-panel__container">
            <div class="col-6">
                <a href="#0" class="cd-panel__close js-cd-close">Close</a>
            </div>
            <div class="cd-panel__content">
                <figure class="_logo" style="position: relative;left: -18px;">
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
                            style="stroke-width:.075033"></path>
                        <path
                            id="ojo"
                            class="st1"
                            d="m35.689 36.395h0.0083c5.4984 0 9.9538-4.4524 9.9538-9.9463s-4.4554-9.9478-9.9538-9.9478h-13.042c-0.75633 0-1.3738 0.61752-1.3738 1.3716v17.151c0 0.75483 0.61752 1.3716 1.3738 1.3716z"
                            style="stroke-width:.075033"></path>
                        <path
                            id="contraforma"
                            class="st2"
                            d="m22.655 40.511h9.6777c10.728 0 19.458 8.5372 19.838 19.181 0.02101 0.55599-0.583 0.71431-0.77584 0.71431h-28.813c-0.75408 0-1.3011-0.61752-1.3011-1.3731v-17.161c0-0.75483 0.61752-1.3611 1.3738-1.3611z"
                            style="stroke-width:.075033"></path>
                    </svg>
                </figure>

                <div class="_menu_interior">

                    <h3>Contenidos</h3>
                    <h4>
                        <a href="https://open.spotify.com/show/37Zbsm0D8FBBMC4m6sukkv">Todos los podcasts</a>
                    </h4>

                    <h3>Linea de oyentes</h3>
                    <h4>
                        <a
                            href="https://wa.me/+5492233052040/?text=%20Hola!%20Soy%20oyente%20del%20programa">
                            <i class="fab fa-whatsapp"></i>
                            Comunicate</a>
                    </h4>

                    <h3>Producción</h3>
                    <h4>
                        <a href="mailto:radiouniversidad@mdp.edu.ar;">
                            <i class="far fa-envelope"></i>
                            radiouniversidad@mdp.edu.ar</a>
                    </h4>
                    <div
                        style="display: grid;grid-template-columns: repeat(3, 1fr); width:160px;color: var(--site-link);fill:var(--site-link)">
                        <h1 class="_center">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                height="43"
                                width="43"
                                viewbox="0 0 512 512"><path
                                d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                        </h1>
                        <h1 class="_center">
                            <i class="fab fa-instagram"></i>
                        </h1>
                        <h1 class="_center">
                            <i class="fab fa-facebook-square"></i>
                        </h1>
                    </div>
                </div>
            </div>
            <!-- cd-panel__content -->
        </div>
        <!-- cd-panel__container -->
    </div>
    <!-- menu lateral -->
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