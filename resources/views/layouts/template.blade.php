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


    @yield('content-css')


    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />


    <!-- JavaScripts
        ============================================= -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.js') }}"></script>

    <!--[if IE]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

    <title>@yield("title")</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>




@yield('content-general')


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
    @stack("scripts")

    @yield('content-script')
    </body>

    </html>

