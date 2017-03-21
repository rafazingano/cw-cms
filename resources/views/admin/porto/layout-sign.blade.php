<!doctype html>
<html class="fixed">
    <head>
        <meta charset="UTF-8">
        <meta name="keywords" content="HTML5 Admin Template" />
        <meta name="description" content="Porto Admin - Responsive HTML5 Template">
        <meta name="author" content="okler.net">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/bootstrap/css/bootstrap.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/font-awesome/css/font-awesome.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/magnific-popup/magnific-popup.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/stylesheets/theme.css') }}" />
        <link rel="stylesheet" href="{{ asset('assets/admin/porto/stylesheets/theme-custom.css') }}">
        <script src="{{ asset('assets/admin/porto/vendor/modernizr/modernizr.js') }}"></script>		
    </head>
    <body>
        <section class="body-sign">
            <div class="center-sign">
                <a href="#" class="logo pull-left">
                    <img src="{{ asset('assets/admin/porto/images/logo.png') }}" height="54" alt="Porto Admin" />
                </a>
                <div class="panel panel-sign">
                    <div class="panel-title-sign mt-xl text-right">
                        <h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
                    </div>
                    <div class="panel-body">
                        @yield('content')
                    </div>
                </div>
                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2016. All Rights Reserved.</p>
            </div>
        </section>
        <script src="{{ asset('assets/admin/porto/vendor/jquery/jquery.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-browser-mobile/jquery.browser.mobile.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-cookie/jquery-cookie.js') }}"></script>				
        <script src="{{ asset('assets/admin/porto/vendor/bootstrap/js/bootstrap.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/nanoscroller/nanoscroller.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/magnific-popup/jquery.magnific-popup.js') }}"></script>		
        <script src="{{ asset('assets/admin/porto/vendor/jquery-placeholder/jquery-placeholder.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.custom.js') }}"></script>
        <script src="{{ asset('assets/admin/porto/javascripts/theme.init.js') }}"></script>
    </body>
</html>