@section("title", "POR 10 MIL - Ticket")

@extends("layouts.template")
@section('content-general')
<div id="main-wrapper" class="contact-page animsition clearfix">

    <!-- HEADER
        ============================================= -->
        <header id="header" class="site-header transparent-header clearfix">
            <header id="header" class="site-header transparent-header clearfix">
                @include("includes.nav")
            </header>
        </header>
        <!-- HEADER END -->

        <!-- PAGE TITLE START
        ============================================= -->
        <div class="page-title wow fadeIn clearfix">
            <div class="title text-center wow fadeIn" data-wow-delay="1.5s">

                <h2><span class="bold">estas</span> a un paso</h2>
            </div>
        </div>
        <!-- PAGE TITLE END -->

        <!-- CONTENT START
        ============================================= -->
        <section id="content" class="clearfix">


            <!-- CONTACT FORM START
            ============================================= -->
            <div class="contact-form clearfix">

                @livewire("form-ticket")

                <div class="agent-img wow fadeInLeft">
                    <img src="{{ asset('assets/img/content/agent/agent-img.jpg') }}" alt="" />
                </div>

            </div>
            <!-- CONTACT FORM END -->

        </section>
        <!-- CONTENT END -->

        <!-- FOOTER START
        ============================================= -->

        <!-- FOOTER END -->

    </div>
@endsection
