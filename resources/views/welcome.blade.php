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
    <link href='http://fonts.googleapis.com/css?family=Abel|Source+Sans+Pro:400,300,300italic,400italic,600,600italic,700,700italic,900,900italic,200italic,200' rel='stylesheet' type='text/css'>

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

            <div id="sticky-wrapper" class="l-navbar-wrapper" style="height: 200px;"><div class="l-navbar l-navbar_expand l-navbar_t-light l-navbar_s-center js-navbar-sticky" style="width: 1110px;">
                <div class="container">
                    <nav class="menuzord js-primary-navigation menuzord-responsive" role="navigation" aria-label="Primary Navigation"><a href="javascript:void(0)" class="showhide" style=""><em></em><em></em><em></em></a>

                        <!--logo start-->
                        <a href="index.html" class="logo-brand" style="height: 100px;">
                            <img class="retina" src="{{asset('assets/img/logo.png')}}" alt="Massive">
                        </a>
                        <!--logo end-->

                        <!--mega menu start-->
                        <ul class="menuzord-menu menuzord-right c-nav_s-standard menuzord-indented scrollable" style="max-height: 400px;">
                            <li class="active">
                                <a href="#">Home<span class="indicator"></span></a>
                            </li>

                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-search"></i> Search<span class="indicator"></span></a>
                                <div class="megamenu megamenu-quarter-width navbar-search" style="right: 0px; display: none;">
                                    <form role="searchform">
                                        <input type="text" class="form-control" placeholder="Search Here">
                                    </form>
                                </div>
                            </li>
                        <li class="scrollable-fix"></li>
                    </ul>
                        <!--mega menu end-->

                    </nav>
                </div>
            </div></div>

        </header>
        <!--header end-->

        <!--hero section-->
        <div class="banner-state text-center vertical-align banner-19 height-600">

        </div>
        <!--hero section-->

        <!--body content start-->
        <section class="body-content">

            <!--portfolio-->
            <div class=" page-content">
                <div class="container">
                    <div class="row">

                    </div>
                </div>
            </div>
            <!--portfolio-->


        </section>
        <!--body content end-->

        <!--footer start -->
        <footer id="footer" class="gray footer-3">
            <div class="container">

                <div class="f-logo-center">
                    <a href="index.html" class="footer-logo" >
                        <img class="retina" style="width: 70px" src="{{asset('assets/img/logo.png')}}" alt="">
                    </a>
                </div>
                <!--<div class="sub-title">THE ULTIMATE THEME WITH MASSIVE COLLECTION</div>-->

                <div class="col-md-6">
                    <div class="copyright">
                        &copy; {{ Carbon\Carbon::now()->year }} - Foto Darke
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
    <script src="{{asset('js/app.js')}}"></script>
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
