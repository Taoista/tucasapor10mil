<div class="header-navigation">
    <div class="container">
        <div class="row">
            <div class="logo wow fadeInDown col-md-3" data-wow-delay="1s">
                <div class="logo-image">
                    <a href="{{ url('./') }}"><img src="{{ asset('assets/img/logo.png') }}" alt=""></a>
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
                    <li><a href="{{ url('./') }}">Home</a></li>
                    <li><a href="{{ url("./preguntas") }}">Preguntas Frecuentes</a></li>
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
                    <li><a href="{{ url("./contacto") }}">Contacto</a></li>
                </ul>
            </nav>
            <div id="slide-overlay" class="slide-overlay"></div>
            <!-- MOBILE MENU END -->

            <div class="navigation wow fadeInDown col-md-9" data-wow-delay="1s">
                <nav id="main-menu" class="menu">
                    <ul id="menu-top-menu" class="menus">
                        <li class="active"><a href="{{ url('./') }}">Home</a></li>
                        <li><a href="{{ url("./preguntas") }}">Preguntas Frecuentes</a></li>
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
                        <li><a href="{{ url("./contacto") }}">Contacto</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
