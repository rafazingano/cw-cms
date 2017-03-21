<!doctype html>
<html class="fixed">
    <head>
        <meta charset="UTF-8">
        <title>Dashboard</title>
        <meta name="keywords" content="Dashboard" />
        <meta name="description" content="Dashboard">
        <meta name="author" content="Dashboard">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/font-awesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/jquery-ui/jquery-ui.css') }}" />		
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/jquery-ui/jquery-ui.theme.css') }}" />		
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/bootstrap-multiselect/bootstrap-multiselect.css') }}" />		
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/morris.js/morris.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/stylesheets/theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/stylesheets/theme-custom.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/pnotify/pnotify.custom.css') }}" />
        <script src="{{ asset('assets/admin/porto/vendor/modernizr/modernizr.js') }}"></script>		
        <!--script src="{{ asset('assets/admin/porto/vendor/style-switcher/style.switcher.localstorage.js') }}"></script-->
    </head>
    <body>
        <section class="body">
            @include('admin.porto.partials.header')
            <div class="inner-wrapper">
                @include('admin.porto.partials.sidebar-left')
                <section role="main" class="content-body">                    
                    @include('admin.porto.partials.page-header')

                    @if (count($errors) > 0)
                    <div class="alert alert-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        {{ session('message') }}
                    </div>
                    @endif

                    @yield('content')
                </section>
            </div>
            @include('admin.porto.partials.sidebar-right')
        </section>
        <script src="{{ asset('assets/admin/porto/vendor/jquery/jquery.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-cookie/jquery-cookie.js') }}"></script>		
        <!--script src="{{ asset('assets/admin/porto/vendor/style-switcher/style.switcher.js') }}"></script-->	
        <script src="{{ asset('assets/admin/porto/vendor/bootstrap/js/bootstrap.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/nanoscroller/nanoscroller.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/vendor/jquery-ui/jquery-ui.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-appear/jquery-appear.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/bootstrap-multiselect/bootstrap-multiselect.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/flot/jquery.flot.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/flot.tooltip/flot.tooltip.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/flot/jquery.flot.pie.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/flot/jquery.flot.categories.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/flot/jquery.flot.resize.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-sparkline/jquery-sparkline.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/raphael/raphael.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/morris.js/morris.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/gauge/gauge.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/snap.svg/snap.svg.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/liquid-meter/liquid.meter.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/jquery.vmap.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/data/jquery.vmap.sampledata.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/jquery.vmap.world.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.africa.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.asia.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.australia.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.europe.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/vendor/pnotify/pnotify.custom.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.custom.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.init.js') }}"></script>
        @stack('scripts')
    </body>
</html>