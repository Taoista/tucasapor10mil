<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en-US"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en-US"> <![endif]-->
<!--[if gte IE 8]><html class="ie ie8" lang="en-US"> <![endif]-->

<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- Google Fonts
        ============================================= -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>

    <!-- Stylesheets
        ============================================= -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/plugin.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}" type="text/css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!-- JavaScripts
        ============================================= -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <title>POR 10 MIL</title>
</head>

<body>

    <!-- MAIN WRAPPER
        ============================================= -->
    <div id="main-wrapper" class="animsition clearfix">

        <!-- HEADER
            ============================================= -->
        <header id="header" class="site-header transparent-header clearfix">

            <div class="header-navigation">
                <div class="container">
                    <div class="row">
                        <div class="logo wow fadeInDown col-md-3" data-wow-delay="1s">
                            <div class="logo-image">
                                <a href="index.html"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
                            </div>
                        </div>

                        <!-- MOBILE MENU START
                            ============================================= -->
                        <div class="mobile-menu wow fadeInDown" data-wow-delay="1s">
                            <button id="slide-buttons" class="icon icon-navicon-round"></button>
                        </div>

                        <nav id="c-menu--slide-right" class="c-menu c-menu--slide-right">
                            <button class="c-menu__close icon icon-remove-delete"></button>
                            <ul class="menus-mobile">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="preguntas.html">Preguntas Frecuentes</a></li>
                                <li class="has-child">
                                    <a href="#">Documentos</a>
                                    <ul class="child">
                                        <li><a href="img/05_SII 2016.pdf">SII 2016</a></li>
                                        <li><a href="img/Avaluo fiscal 2023.pdf">Avaluo fiscal 2023</a></li>
                                        <li><a href="img/06_EETT_FAguilar.pdf">Especificaciones técnicas</a></li>
                                        <li><a href="img/07_IPTC_FAguilar.pdf">Informe profesional técnico</a></li>
                                        <li><a href="img/L1_ARQ_FAguilar1.pdf">Arquitectura Interna</a></li>
                                        <li><a href="img/L1_ARQ_FAguilar.pdf">Arquitectura Externa</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contacto</a></li>
                            </ul>
                        </nav>
                        <div id="slide-overlay" class="slide-overlay"></div>
                        <!-- MOBILE MENU END -->

                        <div class="navigation wow fadeInDown col-md-9" data-wow-delay="1s">
                            <nav id="main-menu" class="menu">
                                <ul id="menu-top-menu" class="menus">
                                    <li class="active"><a href="index.html">Home</a></li>
                                    <li><a href="preguntas.html">Preguntas Frecuentes</a></li>
                                    <li class="has-child">
                                        <a href="blog.html">Documentos</a>
                                        <ul class="child">
                                            <li><a href="img/05_SII 2016.pdf">SII 2016</a></li>
                                            <li><a href="img/Avaluo fiscal 2023.pdf">Avaluo fiscal 2023</a></li>
                                            <li><a href="img/06_EETT_FAguilar.pdf">Especificaciones técnicas</a></li>
                                            <li><a href="img/07_IPTC_FAguilar.pdf">Informe profesional técnico</a></li>
                                            <li><a href="img/L1_ARQ_FAguilar1.pdf">Arquitectura Interna</a></li>
                                            <li><a href="img/L1_ARQ_FAguilar.pdf">Arquitectura Externa</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contacto</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- HEADER END -->

        <!-- SLIDER START
            ============================================= -->
        <section id="slider" class="flexslider-wrap fullscreen clearfix">
            <div class="flexslider clearfix">
                <ul class="slides">
                    <li data-thumb="{{ asset('assets/img/content/slider/slide-sm-1.jpg') }}">
                        <img src="{{ asset('assets/img/content/slider/slide-lg-1.jpg') }}" alt="" />
                    </li>
                    <li data-thumb="{{ asset('assets/img/content/slider/slide-sm-2.jpg') }}">
                        <img src="{{ asset('assets/img/content/slider/slide-lg-2.jpg') }}" alt="" />
                    </li>
                    <li data-thumb="{{ asset('assets/img/content/slider/slide-sm-3.jpg') }}">
                        <img src="{{ asset('assets/img/content/slider/slide-lg-3.jpg') }}" alt="" />
                    </li>
                    <li data-thumb="{{ asset('assets/img/content/slider/slide-sm-4.jpg') }}">
                        <img src="{{ asset('assets/img/content/slider/slide-lg-4.jpg') }}" alt="" />
                    </li>
                    <li data-thumb="{{ asset('assets/img/content/slider/slide-sm-5.jpg') }}">
                        <img src="{{ asset('assets/img/content/slider/slide-lg-5.jpg') }}" alt="" />
                    </li>
                </ul>
            </div>

            <div class="slider-text-wrap vertical-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="slider-text wow fadeIn" data-wow-delay="0.5s">
                                <h2 class="wow fadeInLeft" data-wow-delay="1s">¡Participa por la casa de tus sueños!
                                </h2>
                                <p class="wow fadeIn" data-wow-delay="1.5s">123, Near Shammer Lake, New York - 10001</p>
                                <h3 class="wow fadeIn" data-wow-delay="2s">$10.000</h3>
                                <a href="tiket.html" class="button-normal yellow wow fadeIn"
                                    data-wow-delay="2.5s">COMPRA TU TICKET</a>
                            </div>
                        </div>

                        <div class="slider-form col-md-4 wow fadeIn text-center" data-wow-delay="0.5s">
                            <div class="form-wrap">
                                <div class="form-appointment">
                                    <form method="post" action="contact.php">
                                        <input type="text" name="name" id="name" placeholder="Nombre" />
                                        <input type="text" name="email" id="email" placeholder="Email" />
                                        <textarea name="message" id="message" cols="10" rows="2"
                                            placeholder="Mensaje"></textarea>
                                        <button class="button-normal yellow">Enviar consulta</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- SLIDER END -->

        <!-- CONTENT START
            ============================================= -->
        <section id="content" class="homepage clearfix">

            <!-- FEATURES START
                ============================================= -->
            <div class="features wrapper clearfix">
                <div class="container">
                    <div class="row">
                        <div class="title text-center wow fadeIn">

                            <h2><span class="bold">Detalles de</span> la propiedad</h2>
                        </div>

                        <div class="features-list">
                            <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.3s">
                                <i class="icon icon-ruler"></i>
                                <h4>Medidas</h4>
                                <p>250Mt2</p>
                            </div>

                            <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.6s">
                                <i class="icon icon-bed"></i>
                                <h4>Cuartos</h4>
                                <p>3</p>
                            </div>

                            <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="0.9s">
                                <i class="icon icon-bath"></i>
                                <h4>Baños</h4>
                                <p>4</p>
                            </div>

                            <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.2s">
                                <i class="icon icon-calendar"></i>
                                <h4>Año de Remodelación</h4>
                                <p>2023</p>
                            </div>

                            <div class="features-item col-md-15 wow fadeIn text-center" data-wow-delay="1.5s">
                                <i class="icon icon-car"></i>
                                <h4>Estacionamientos</h4>
                                <p>5</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- FEATURES END -->

            <!-- FACILITIES START
                ============================================= -->
            <div class="facilities clearfix" style="background-image: url({{ asset('assets/img/content/facilities/facilities.jpg') }});">

                <div class="facilities-detail wrapper wow fadeIn">
                    <div class="title text-center">
                        <h2><span class="bold">Instalaciones</span>en la Super Casa</h2>
                    </div>

                    <div class="facilities-content">



                        <div class="facilities-item">
                            <h4>REGULARIZADA Y LIBRE DE CONTRIBUCIONES</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>ACCESO A AUTOPISTAS A 5 MINUTOS TANTO AL ORIENTE COMO PONIENTE</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>COLEGIOS Y JARDINES INFANTILES A 5 MINUTOS CAMINANDO</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>METRO LINEA 4 ESTACION TRINIDAD TRAYECTO A PIES 12 MINUTOS</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>ESTACIONES DE SERVICIO COPEC - SHELL – PETROBRAS</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>MINIMARKET CERCANOS EN LA MANZANA</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>CASA TOTALMENTE REMODELADA AÑO 2022 - 2023</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>PLAZAS Y MULTICANCHAS</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>BODEGA y COBERTIZO</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>ESTACIONAMIENTO PARA 5 VEHICULOS CON JARDIN Y PATIO TRASERO</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>EDIFICACION SOLIDA AMBOS PISOS</h4>
                        </div>

                        <div class="facilities-item">
                            <h4>FARMACIAS CERCANAS</h4>
                        </div>


                    </div>

                    <a href="tiket.html" class="button-normal yellow">Comprar Ticket</a>
                </div>
            </div>
            <!-- FACILITIES END -->

            <!-- GALLERY START
                ============================================= -->
            <div class="gallery wrapper clearfix">
                <div class="container">

                    <div class="title text-center wow fadeIn">
                        <h2><span class="bold">Galeria</span> de la casa</h2>
                    </div>

                    <section id="grid" class="grid clearfix">
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image1.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Living</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image2.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Comedor</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image3.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Cocina americana</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image4.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Home Office</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="r#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image5.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Pieza principal</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image6.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Baños</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image7.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Pieza secundaria</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image8.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Bodega</h2>

                                </figcaption>
                            </figure>
                        </a>
                        <a href="#" class="wow fadeInUp"
                            data-path-hover="M 0,0 0,38 90,58 180.5,38 180,0 z">
                            <figure>
                                <img src="{{ asset('assets/img/content/gallery/image9.jpg') }}" />
                                <svg viewBox="0 0 180 500" preserveAspectRatio="none">
                                    <path d="M 0 0 L 0 182 L 90 126.5 L 180 182 L 180 0 L 0 0 z " />
                                </svg>
                                <figcaption>
                                    <h2>Jardin / Garage</h2>

                                </figcaption>
                            </figure>
                        </a>
                    </section>
                </div>
            </div>
            <!-- GALLERY END -->

        </section>
        <!-- CONTENT END -->

        <!-- FOOTER START
            ============================================= -->
        <footer id="footer" class="wrapper clearfix">
            <div class="footer-text wow fadeIn text-center">


            </div>

            <div class="footer-copyright wow fadeIn text-center">
                <div class="container">
                    <div class="copyright">



                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER END -->

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    <!-- External -->
    <script type="text/javascript" src="{{ asset('assets/js/plugin.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <script>
        (function () {

            function init() {
                var speed = 300,
                    easing = mina.backout;

                [].slice.call(document.querySelectorAll('#grid > a')).forEach(function (el) {
                    var s = Snap(el.querySelector('svg')), path = s.select('path'),
                        pathConfig = {
                            from: path.attr('d'),
                            to: el.getAttribute('data-path-hover')
                        };

                    el.addEventListener('mouseenter', function () {
                        path.animate({ 'path': pathConfig.to }, speed, easing);
                    });

                    el.addEventListener('mouseleave', function () {
                        path.animate({ 'path': pathConfig.from }, speed, easing);
                    });
                });
            }

            init();

        })();
    </script>

</body>

</html>
