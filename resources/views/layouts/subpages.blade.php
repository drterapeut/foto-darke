<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Foto Darke</title>

    <!--common style-->
    <link href='https://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('design/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/elastic.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/linea-icon.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/owl.theme.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/shortcodes.css')}}">
    <link rel="stylesheet" href="{{asset('design/css/style.css?version=1.0.7')}}">
    <link rel="stylesheet" href="{{asset('design/css/default-theme.css')}}">
    <!-- endinject -->

    <!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="{{asset('design/slider-revolution/css/extralayers.css')}}" media="screen">
    <link rel="stylesheet" type="text/css" href="{{asset('design/slider-revolution/css/settings.css')}}" media="screen">
</head>

<body>
<div id="body">
    <!--  preloader start -->
    <div id="tb-preloader">
        <div class="tb-preloader-wave"></div>
    </div>
    <!-- preloader end -->
    <div class="wrapper">
        <!--header start-->
        <header class="l-header l-header_overlay">
            <div class="l-navbar l-navbar_expand l-navbar_t-light-trans js-navbar-sticky">
                <div class="container-fluid">
                    <nav class="menuzord js-primary-navigation" role="navigation" aria-label="Primary Navigation">
                        <!--logo start-->
                        <a href="#home" class="logo-brand">
                            <img  class="" src="{{asset('assets/img/logo.png')}}" alt="Vice Trading">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu pull-right op-nav c-nav_s-standard menuzord-indented scrollable" style="display: inline-block !important;">
                            <li class="{{ (Request::is('/') ? 'active' : '') }}">
                                <a href="{{ url('/') }}">
                                    Pocetna
                                </a>
                            </li>
                            <li class="{{ (Request::is('galleries') ? 'active' : '') }}">
                                <a href="{{ url('/galleries') }}">
                                    Galerije
                                </a>
                            </li>
                            <li>
                                <a href="">O Meni</a>
                            </li>
                            <li>
                                <a href="">Kontakt</a>
                            </li>
                        </ul>
                        <!--mega menu end-->
                    </nav>
                </div>
            </div>
        </header>
        <!--header end-->
        <!--body content start-->
        <section class="body-content page-content ">
            <!--promo-->
                <div class="container">
                        @yield('content')
                </div>
            <!--promo-->
        </section>
        <!--body content end-->

        <!--footer start -->
        <footer id="footer" class="gray footer-3">
            <div class="container">
                <div class="f-logo-center">
                    <a href="" class="footer-logo">
                        <img class="retina" src="{{asset('assets/img/logo.png')}}" alt="" style="height: 52px; width: auto;">
                    </a>
                </div>
                <!--<div class="sub-title">THE ULTIMATE THEME WITH MASSIVE COLLECTION</div>-->
                <div class="col-md-6">
                    <div class="copyright">
                        &copy; {{ Carbon\Carbon::now()->year }} - Foto Darke
                    </div>
                    <div class="copyright-sub-title text-uppercase">
                        “You don’t take a photograph. You ask quietly to borrow it.”
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="social-link pull-right circle ">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-google-plus"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->
    </div>

    <!-- inject:js -->
    <script src="{{asset('design/js/modernizr.js')}}"></script>
    <script src="{{asset('design/jquery/jquery-1.10.2.min.js')}}"></script>
    <script src="{{asset('design/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('design/js/validator.min.js')}}"></script>
    <script src="{{asset('design/js/breakpoint.js')}}"></script>
    <script src="{{asset('design/js/jquery.countTo.js')}}"></script>
    <script src="{{asset('design/js/jquery.countdown.js')}}"></script>
    <script src="{{asset('design/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('design/js/jquery.eislideshow.js')}}"></script>
    <script src="{{asset('design/js/jquery.flexslider-min.js')}}"></script>
    <script src="{{asset('design/js/imagesloaded.js')}}"></script>
    <script src="{{asset('design/js/jquery.isotope.js')}}"></script>
    <script src="{{asset('design/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('design/js/menuzord.js')}}"></script>
    <script src="{{asset('design/js/jquery.nav.js')}}"></script>
    <script src="{{asset('design/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('design/js/parallax.min.js')}}"></script>
    <script src="{{asset('design/js/smooth.js')}}"></script>
    <script src="{{asset('design/js/jquery.sticky.min.js')}}"></script>
    <script src="{{asset('design/js/touchspin.js')}}"></script>
    <script src="{{asset('design/js/typist.js')}}"></script>
    <script src="{{asset('design/js/visible.js')}}"></script>
    <script src="{{asset('design/js/wow.min.js')}}"></script>
    <script src="{{asset('design/js/scripts.js')}}"></script>
    <!-- endinject -->

    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{asset('design/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('design/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION INIT  -->
    <script type="text/javascript">
        jQuery(document).ready(function() {

            jQuery('.tp-banner').show().revolution(
                    {
                        dottedOverlay:"none",
                        delay:8000,
                        // startwidth:1170,
                        startheight:600,
                        hideThumbs:200,

                        thumbWidth:100,
                        thumbHeight:50,
                        thumbAmount:5,

                        navigationType:"bullet",
                        navigationArrows:"solo",
                        navigationStyle:"preview4",

                        touchenabled:"on",
                        onHoverStop:"on",

                        swipe_velocity: 0.7,
                        swipe_min_touches: 1,
                        swipe_max_touches: 1,
                        drag_block_vertical: false,

                        parallax:"mouse",
                        parallaxBgFreeze:"on",
                        parallaxLevels:[7,4,3,2,5,4,3,2,1,0],

                        keyboardNavigation:"off",

                        navigationHAlign:"center",
                        navigationVAlign:"bottom",
                        navigationHOffset:0,
                        navigationVOffset:20,

                        soloArrowLeftHalign:"left",
                        soloArrowLeftValign:"center",
                        soloArrowLeftHOffset:20,
                        soloArrowLeftVOffset:0,

                        soloArrowRightHalign:"right",
                        soloArrowRightValign:"center",
                        soloArrowRightHOffset:20,
                        soloArrowRightVOffset:0,

                        shadow:0,
                        fullWidth:"on",
                        // autoHeight:"on",
                        fullScreen:"off",

                        spinner:"spinner4",

                        stopLoop:"off",
                        stopAfterLoops:-1,
                        stopAtSlide:-1,

                        shuffle:"off",

                        autoHeight:"off",
                        forceFullWidth:"off",

                        hideThumbsOnMobile:"off",
                        hideNavDelayOnMobile:1500,
                        hideBulletsOnMobile:"off",
                        hideArrowsOnMobile:"off",
                        hideThumbsUnderResolution:0,

                        hideSliderAtLimit:0,
                        hideCaptionAtLimit:0,
                        hideAllCaptionAtLilmit:0,
                        startWithSlide:0,
                        videoJsPath:"slider-revolution/videojs/",
                        fullScreenOffsetContainer: ""
                    });
        }); //ready
    </script>
</body>

</html>
