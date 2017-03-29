
        <nav class="mobile">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 menu-opener-holder">
                        <button type="button" class="btn btn-default" id="menu-opener" aria-label="Menu">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
        <header>
            <div id="trigger-box-logo" class="spacer s1"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{ url('/') }}" class="logo" id="logo"><img src="{{ asset('assets/site/fleek/img/fleek-logo-branco.png') }}" class="img img-responsive" alt="Fleek - Marketing Digital" /></a>
                    </div>
                    <div class="col-md-8">
                        <nav class="menu">
                            <ul>
                                <li><a href="{{ url('/') }}" title="Home" class="{{ Request::is( '/') ? 'selected' : '' }}">HOME</a></li>
                                <li><a href="{{ url('sobre-a-fleek') }}" title="Sobre" class="{{ Request::is( '/') ? 'selected' : '' }}">SOBRE</a></li>
                                <li><a href="{{ url('servicos') }}" title="Serviços" class="{{ Request::is( '/') ? 'selected' : '' }}">SERVIÇOS</a></li>
                                <li><a href="{{ url('cases') }}" title="Cases" class="{{ Request::is( '/') ? 'selected' : '' }}">CASES</a></li>
                                <li><a href="{{ url('noticias') }}" title="Notícias" class="{{ Request::is( '/') ? 'selected' : '' }}">NOTÍCIAS</a></li>
                                <li><a href="{{ url('contato') }}" title="Contato" class="{{ Request::is( '/') ? 'selected' : '' }}">CONTATO</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <script>
                var scene = new ScrollMagic.Scene({triggerElement: "#trigger-box-logo"})
                    .setVelocity("#logo>img",{'opacity':1},{duration: 1200})
                    .addTo(controller);
            </script>
        </header>