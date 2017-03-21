<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">
        <link rel="icon" href="{{ asset('assets/site/default/images/favicon.ico') }}">
        <title> @yield('title') </title>
        <link href="{{ asset('assets/site/default/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/site/default/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
        <script src="{{ asset('assets/site/default/js/ie-emulation-modes-warning.js') }}"></script>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <link href="{{ asset('assets/site/default/css/style.css') }}" rel="stylesheet">
    </head>
    <body>

        @include('site.default.partials.header')
        @if(Request::is('/'))
        @include('site.default.partials.carousel')
        @endif
        <div class="container marketing">
            @yield('content')
            @include('site.default.partials.footer')
        </div>
        <script src="{{ asset('assets/site/default/js/vendor/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/site/default/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/site/default/js/vendor/holder.min.js') }}"></script>
        <script src="{{ asset('assets/site/default/js/ie10-viewport-bug-workaround.js') }}"></script>
    </body>
</html>