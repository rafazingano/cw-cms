<header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 57, 'stickySetTop': '-57px', 'stickyChangeLogo': true}">
    <div class="header-body">
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column">
                    <div class="header-logo">
                        <a href="{{ url('/') }}">
                            <img alt="Confraria Web" width="111" height="54" data-sticky-width="82" data-sticky-height="40" data-sticky-top="33" src="{{ asset('assets/site/porto/img/logo.png') }}">
                        </a>
                    </div>
                </div>
                <div class="header-column">
                    <div class="header-row">                        
                        <nav class="header-nav-top">
                            <ul class="nav nav-pills">
                                <li class="hidden-xs">
                                    <a href="{{ url('a-confraria') }}"><i class="fa fa-angle-right"></i> A Confraria</a>
                                </li>
                                <li class="hidden-xs">
                                    <a href="{{ url('contato') }}"><i class="fa fa-angle-right"></i> Contato</a>
                                </li>
                                <li>
                                    <span class="ws-nowrap"><i class="fa fa-phone"></i> (051) 99402-4451</span>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header-row">
                        <div class="header-nav">
                            <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                <i class="fa fa-bars"></i>
                            </button>
                            <ul class="header-social-icons social-icons hidden-xs">
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/ConfrariaWeb" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/ConfrariaWeb" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/ConfrariaWeb" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                            <div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 collapse">
                                <nav>
                                    <ul class="nav nav-pills" id="mainNav">
                                        <li class="{{ Request::is('/') ? 'active' : '' }}">
                                            <a class="" href="{{ url('/') }}"> Home </a>                                            
                                        </li>
                                        <li class="{{ Request::is('servicos') ? 'active' : '' }}">
                                            <a href="{{ url('servicos') }}">
                                                Serviços
                                            </a>
                                        </li>
                                        <li class="{{ Request::is('segmentos') ? 'active' : '' }}">
                                            <a href="{{ url('segmentos') }}">
                                                Segmentos
                                            </a>
                                        </li>
                                        <li class="{{ Request::is('cases') ? 'active' : '' }}">
                                            <a href="{{ url('cases') }}">
                                                Cases
                                            </a>
                                        </li>
               
                                        <li class="{{ Request::is('blog') ? 'active' : '' }}">
                                            <a href="{{ url('blog') }}">
                                                Blog
                                            </a>
                                        </li> 
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>