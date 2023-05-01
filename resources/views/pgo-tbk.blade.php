@section("title", "POR 10 MIL - Compra Ticket")

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

                                <h2 class="title-post">Pago correcto, YA ESTAS PARTICIPANDO!</h2>
                                <div class="info">
                                    {{-- <span class="author vcard">By: <a href="#">Akmanda</a></span> --}}
                                    {{-- <span class="cat-links">Story</span> --}}
                                    <span class="date">{{ date("d/m/Y", strtotime($detalle->fecha)) }}</span>
                                </div>
                                <h3>Datos del pago</h3>
                                <p>COD: {{ $uuid }}</p>
                                <p>* {{ $detalle->tipo_tarjeta }}</p>
                                <p>* N tarjeta{{ $detalle->n_tarjeta }}</p>
                                @if( $detalle->cuotas != 0)
                                <p>* Cuotas {{ $detalle->cuotas }}</p>
                                <p>* {{ money_format($detalle->p_cuotas) }}</p>
                                @endif
                                <p>{{ money_format($detalle->total) }}</p>
                                <a href="{{ url('./') }}" class="button-normal yellow">Home</a>
                            </div>

                        </div>
                        <div class="col-md-3">
                            {!! $qr !!}
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <!-- BLOG END -->

    </section>
    <!-- CONTENT END -->



</div>

@endsection
