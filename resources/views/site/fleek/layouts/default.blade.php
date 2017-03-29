<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
        <meta name="description" content="@yield('description')">
        <meta name="author" content="@yield('author')">
        <meta content='#00528f' name='theme-color'/>
        <link rel="icon" href="{{ asset('assets/site/fleek/img/favicon.png') }}">

        <title>@yield('title')</title>

        <link href="{{ asset('assets/site/fleek/css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('assets/site/fleek/js/jquery.min.js') }}"></script>
        @if(Request::is('/'))
        <script src="{{ asset('assets/site/fleek/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/site/fleek/js/mask.js') }}"></script>
        @endif
        @if(Request::is('contato'))
        <script src="{{ asset('assets/site/fleek/js/mask.js') }}"></script>
        @endif
        <script src="{{ asset('assets/site/fleek/js/velocity.min.js') }}"></script>
        <script src="{{ asset('assets/site/fleek/js/ScrollMagic.min.js') }}"></script>
        <script src="{{ asset('assets/site/fleek/js/animation.velocity.min.js') }}"></script>
        <script src="{{ asset('assets/site/fleek/js/app.js') }}"></script>
        @if(Request::is('/'))
        <script>
            $(document).ready(function(){
                $('#depoimentos-carousel').owlCarousel({
                    items:2,
                    itemsDesktop:[1199,2],
                    itemsDesktopSmall:[979,2],
                    itemsTablet:[768,2],
                    itemsMobile:[479,1]
                });
                var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };
                $('#phone').mask(SPMaskBehavior, spOptions);
            });
        </script>
        @endif
        @if(Request::is('servicos'))
        <script>
            $(document).ready(function(){
                openService('box-sites');
            });
        </script>
        @endif
        @if(Request::is('contato'))
        <script>
            $(document).ready(function(){
                var SPMaskBehavior = function (val) {
                    return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
                },
                spOptions = {
                onKeyPress: function(val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                    }
                };
                $('#phone').mask(SPMaskBehavior, spOptions);
            });
        </script>
        @endif
    </head>
    <body>
        @include('site.fleek.partials.header')
        <main>
            @yield("content")
        </main>
        @include('site.fleek.partials.footer')
    </body>
</html>