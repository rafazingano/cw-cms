<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">	

        <title>Confraria Web</title>	

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Confraria Web">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/font-awesome/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/magnific-popup/magnific-popup.min.css') }}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/theme-elements.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/theme-blog.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/theme-shop.css') }}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/rs-plugin/css/settings.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/rs-plugin/css/layers.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/rs-plugin/css/navigation.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/site/porto/vendor/circle-flip-slideshow/css/component.css') }}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/skins/default.css') }}">		
        <script src="{{ asset('assets/site/porto/master/style-switcher/style.switcher.localstorage.js') }}"></script>

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{ asset('assets/site/porto/css/custom.css') }}">

        <!-- Head Libs -->
        <script src="{{ asset('assets/site/porto/vendor/modernizr/modernizr.min.js') }}"></script>

    </head>
    <body>
        <div class="body">
            @include('site.porto.partials.header')
            @yield("content")
            @include('site.porto.partials.footer')
        </div>

        <!-- Vendor -->
        <script src="{{ asset('assets/site/porto/vendor/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery-cookie/jquery-cookie.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/master/style-switcher/style.switcher.js') }}" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
        <script src="{{ asset('assets/site/porto/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/common/common.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.validation/jquery.validation.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/isotope/jquery.isotope.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('assets/site/porto/vendor/vide/vide.min.js') }}"></script>

        <!-- Theme Base, Components and Settings -->
        <script src="{{ asset('assets/site/porto/js/theme.js') }}"></script>

        <!-- Current Page Vendor and Views -->
        <script src="{{ asset('assets/site/porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>		
        <script src="{{ asset('assets/site/porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>		
        <script src="{{ asset('assets/site/porto/vendor/circle-flip-slideshow/js/jquery.flipshow.min.js') }}"></script>		
        <script src="{{ asset('assets/site/porto/js/views/view.home.js') }}"></script>

        <!-- Theme Custom -->
        <script src="{{ asset('assets/site/porto/js/custom.js') }}"></script>
        <!-- Theme Initialization Files -->
        <script src="{{ asset('assets/site/porto/js/theme.init.js') }}"></script>
        <script src="{{ asset('assets/site/porto/master/analytics/analytics.js') }}"></script>

    </body>
</html>




