@section("title", "POR 10 MIL - Contacto")

@extends("layouts.template")
@section('content-general')


        <div id="main-wrapper" class="contact-page animsition clearfix">

        <!-- HEADER
            ============================================= -->
            <header id="header" class="site-header transparent-header clearfix">
                @include("includes.nav")
            </header>
            <!-- HEADER END -->

            <!-- PAGE TITLE START
            ============================================= -->
            <div class="page-title wow fadeIn clearfix">
                <div class="title text-center wow fadeIn" data-wow-delay="1.5s">

                </div>
            </div>
            <!-- PAGE TITLE END -->

            <!-- CONTENT START
            ============================================= -->
            <section id="content" class="clearfix">

                <!-- AGENT DETAILS START
                ============================================= -->
                <div class="agent clearfix">
                    <div class="agent-img wow fadeInLeft">
                        <img src="{{ asset("assets/img/content/agent/agent-img.jpg") }}" alt="" />
                    </div>

                    <div class="agent-detail wow fadeIn" data-wow-delay="0.5s">

                        <div class="agent-title">
                            <h3 class="agent-name">Felipe Aguilar</h3>
                        </div>
                        <div class="agent-desc">

                            <p>Email : contacto@por10mil.cl</p>
                            <p>Phone : +56 9 6589 8518</p>
                            <p>Address : Chacabuco 9805 / La florida</p>
                        </div>

                    </div>
                </div>
                <!-- AGENT DETAILS END -->

                <!-- CONTACT FORM START
                ============================================= -->
                <div class="contact-form clearfix">
                    <div class="form wow fadeIn">
                        <div class="title text-center">
                            <h2><span class="bold">Contactar con</span> El dueño</h2>
                        </div>
                        <form method="post">
                            <input type="text" name="name" id="name" placeholder="Nombre" />
                            <input type="text" name="email" id="email" placeholder="Email" />
                            <input type="text" name="subject" id="subject" placeholder="Asunto" />
                            <textarea name="message" id="message" cols="45" rows="5" placeholder="Mensaje"></textarea>
                            <button class="button-normal yellow">Enviar</button>
                        </form>
                    </div>

                    <div class="maps wow fadeInRight">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3325.31543005659!2d-70.59965!3d-33.54518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662d09560f91ff3%3A0xb6d8c223fde08286!2sChacabuco%209805%2C%208250370%20La%20Florida%2C%20Regi%C3%B3n%20Metropolitana!5e0!3m2!1ses!2scl!4v1681069063871!5m2!1ses!2scl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>

                </div>
                <!-- CONTACT FORM END -->

            </section>
            <!-- CONTENT END -->

            <!-- FOOTER START
            ============================================= -->


        </div>
@endsection
