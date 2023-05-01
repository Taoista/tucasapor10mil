@section("title", "POR 10 MIL - Error compra")

@extends("layouts.template")
@section('content-general')

<div id="main-wrapper" class="blog-page animsition clearfix">
    <header id="header" class="site-header transparent-header clearfix">
        @include("includes.nav")
    </header>
    <div class="page-title wow fadeIn clearfix">
        <div class="title text-center wow fadeIn" data-wow-delay="1.5s">
            <p class="subtitle"></p>
            <h2><span class="bold">Trasbank</span> </h2>
        </div>
    </div>
    <!-- PAGE TITLE END -->

    <!-- CONTENT START
    ============================================= -->
    <section id="content" class="clearfix">

        <!-- BLOG START
        ============================================= -->
        <div class="blog wrapper clearfix">
            <div class="container">
                <div class="row">

                    <div class="article">
                        <div class="col-md-9">
                            <div class="post-content post-item">

                                <h2 class="title-post">Error en el pago</h2>
                                <div class="info">
                                    {{-- <span class="author vcard">By: <a href="#">Akmanda</a></span> --}}
                                    {{-- <span class="cat-links">Story</span> --}}
                                    <span class="date">{{ date("d/m/Y") }}</span>
                                </div>

                                <h3>Ocurrió un error</h3>
                                <p>Las posibles causas de este rechazo son:</p>
                                <p>* Error en el ingreso de los datos de su tarjeta de Crédito o Débito (fecha y/o código de seguridad).</p>
                                <p>* Su tarjeta de Crédito o Débito no cuenta con saldo suficiente.</p>
                                <p>* Tarjeta aún no habilitada en el sistema financiero.</p>
                                <p>* Tu dispostivo de verificación no tiene internet</p>
                                <p>* Cancelo el proceso de pago.</p>

                                <a href="{{ url('./') }}" class="button-normal yellow">Home</a>
                            </div>

                        </div>
                        {{-- <div class="col-md-3">

                        </div> --}}

                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG END -->

    </section>
    <!-- CONTENT END -->



</div>

@endsection
