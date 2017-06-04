@extends('site.porto.layouts.default')

@section('title', isset($options->meta_title)? $options->meta_title : 'Home')
@section('description', isset($options->meta_description)? $options->meta_description : 'Home')
@section('author', isset($options->meta_author)? $options->meta_author : 'Home')

@section('content')
@include('site.porto.partials.slider')
<div role="main" class="main">
    <div class="container">

        <div class="row center">
            <div class="col-md-12">
                <h1 class="mb-sm word-rotator-title">
                    Confraria Web é
                    <strong class="inverted">
                        <span class="word-rotate" data-plugin-options="{'delay': 2000, 'animDelay': 300}">
                            <span class="word-rotate-items">
                                <span>digital</span>
                                <span>responsável</span>
                                <span>pontual</span>
                            </span>
                        </span>
                    </strong>
                    para lhe atender com excelência.
                </h1>
                <p class="lead">
                    Com o conceito de agência 100% digital a Confraria Web pode ser extremamente competitiva no valor oferecendo serviços e produtos de grande qualidade dispondo de profissionais imensamente qualificados.
                </p>
            </div>
        </div>

    </div>

    <div class="home-concept appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
        <svg class="home-concept-bg" x="0px" y="0px" width="345px" height="93px" viewBox="0 0 345 83" enable-background="new 0 0 345 93" xml:space="preserve">
        <image overflow="visible" width="26" height="39" xlink:href="{{ asset('assets/site/porto/img/home-concept-pin.png') }}" transform="matrix(0.169 0.1308 -0.1308 0.169 339.8496 0.6826)" class="final-pin appear-animation" data-appear-animation="animated-pin" data-appear-animation-delay="3650">
        </image>
        <path class="line appear-animation" fill="none" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-duration="4s" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
        <path fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" d="M7.086,87.455c8.133-8.646,54.247-51.634,155.173-36.766C268.762,66.38,327.34,17.642,337.992,10.241"/>
        <image overflow="visible" width="26" height="39" xlink:href="{{ asset('assets/site/porto/img/home-concept-pin.png') }}" transform="matrix(0.2137 0 0 0.2137 1 81.5898)" class="initial-pin appear-animation" data-appear-animation="animated-pin">
        </image>
        </svg>
        <div class="container">

            <div class="row center">
                <span class="sun"></span>
                <span class="cloud"></span>
                <div class="col-md-2 col-md-offset-1">
                    <div class="process-image">
                        <div class="box-image">
                            <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
                            <circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="800" cx="19.5" cy="19.5" r="19.063"/>
                            <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
                            </svg>
                            <img src="{{ asset('assets/site/porto/img/home-concept-item-1.png') }}" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1400" />
                        </div>
                        <strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="1150" data-plugin-options="{'accY': 200}">Estratégia</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image">
                        <div class="box-image">
                            <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
                            <circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1200" cx="19.5" cy="19.5" r="19.063"/>
                            <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
                            </svg>
                            <img src="{{ asset('assets/site/porto/img/home-concept-item-2.png') }}" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="1900" />
                        </div>
                        <strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2150" data-plugin-options="{'accY': 200}">Planejamento</strong>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="process-image">
                        <div class="box-image">
                            <svg class="small-circle" x="0px" y="0px" width="39px" height="39px" viewBox="0 0 39 39" enable-background="new 0 0 39 39" xml:space="preserve">
                            <circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="1700" cx="19.5" cy="19.5" r="19.063"/>
                            <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="19.5" cy="19.5" r="19.063"/>
                            </svg>
                            <img src="{{ asset('assets/site/porto/img/home-concept-item-3.png') }}" alt="" class="appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2400" />
                        </div>
                        <strong class="appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="2650" data-plugin-options="{'accY': 200}">Construir</strong>
                    </div>
                </div>
                <div class="col-md-4 col-md-offset-1">
                    <div class="project-image">
                        <div class="box-image">
                            <svg class="big-circle" x="0px" y="0px" width="85px" height="85px" viewBox="0 0 85 85" enable-background="new 0 0 85 85" xml:space="preserve">
                            <circle class="line appear-animation" fill="#FFF" stroke="#6f6f6f" stroke-width="0.25" stroke-miterlimit="0" stroke-dasharray="0" data-appear-animation="animated-line" data-appear-animation-delay="2250" cx="42.5" cy="42.5" r="42.063"/>
                            <circle fill="none" stroke="#FFF" stroke-width="0.50" stroke-miterlimit="10" stroke-dasharray="1,2.5" cx="42.5" cy="42.5" r="42.063"/>
                            </svg>
                            <div id="fcSlideshow" class="fc-slideshow appear-animation" data-appear-animation="zoomIn" data-appear-animation-duration="300" data-appear-animation-delay="2900">
                                <ul class="fc-slides">
                                    <li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{ asset('assets/site/porto/img/projects/project-home-1.jpg') }}" alt="" /></a></li>
                                    <li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{ asset('assets/site/porto/img/projects/project-home-2.jpg') }}" alt="" /></a></li>
                                    <li><a href="portfolio-single-small-slider.html"><img class="img-responsive" src="{{ asset('assets/site/porto/img/projects/project-home-3.jpg') }}" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                        <strong class="our-work appear-animation" data-appear-animation="fadeInDown" data-appear-animation-delay="3150" data-plugin-options="{'accY': 300}">Nosso trabalho</strong>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">

        <div class="row">
            <hr class="tall">
        </div>

    </div>

    <div class="container">

        <div class="row">
            <div class="col-md-8">
                <h2>Nossos <strong>Serviços</strong></h2>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-group"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Web Sites</h4>
                                <p class="tall">Totalmente voltados para captação de clientes.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-file"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Landing Pages</h4>
                                <p class="tall">Uma forma rápida e direta de impactar.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-google-plus"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Mídias Sociais</h4>
                                <p class="tall">Seus clientes estão nas redes sociais.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-adjust"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">SEO</h4>
                                <p class="tall">Primeiras posições nas buscas orgânicas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-film"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Identidade Visual</h4>
                                <p class="tall">Traduzir seu negócio em arte.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">CRM</h4>
                                <p class="tall">Gerencie seus clientes, em um só lugar.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-bars"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Chat</h4>
                                <p class="tall">Atenda seus clientes online com eficiência.</p>
                            </div>
                        </div>
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-desktop"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-none">Links Patrocinados</h4>
                                <p class="tall">Encontre quem realmente esta te procurando.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h2>e mais...</h2>

                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <i class="fa fa-usd"></i>
                                    Melhores preços
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="accordion-body collapse in">
                            <div class="panel-body">
                                Por inovar em ser 100% digital podemos com certeza oferecer o melhor preço com a mais alta qualidade.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                    <i class="fa fa-comment"></i>
                                    Hospedagem
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="accordion-body collapse">
                            <div class="panel-body">
                                Trabalhamos em parceria com as empresas de hospedagem mais conceituadas mundialmente, isso garante seu site sempre online.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                                    <i class="fa fa-laptop"></i>
                                    Suporte e manutenção
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="accordion-body collapse">
                            <div class="panel-body">
                                Oferecemos excelentes pacotes de suporte a manutenção, assim você pode focar 100% no seu negócio enquanto tomamos conta do seu negócio online.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="tall">

        <!--div class="row center">
            <div class="col-md-12">
                <h2 class="mb-sm word-rotator-title">
                    We're not the only ones
                    <strong>
                        <span class="word-rotate" data-plugin-options="{'delay': 3500, 'animDelay': 400}">
                            <span class="word-rotate-items">
                                <span>excited</span>
                                <span>happy</span>
                            </span>
                        </span>
                    </strong>
                    about Porto Template...
                </h2>
                <h4 class="heading-primary lead tall">25,000 customers in 100 countries use Porto Template. Meet our customers.</h4>
            </div>
        </div-->

        <!--div class="row center">
            <div class="owl-carousel owl-theme" data-plugin-options="{'items': 6, 'autoplay': true, 'autoplayTimeout': 3000}">
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-1.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-2.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-3.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-4.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-5.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-6.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-4.png') }}" alt="">
                </div>
                <div>
                    <img class="img-responsive" src="{{ asset('assets/site/porto/img/logos/logo-2.png') }}" alt="">
                </div>
            </div>
        </div-->

    </div>

    <section class="section section-custom-map">
        <section class="section section-default section-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="recent-posts mb-xl">
                            <h2>Últimas <strong>Postagens</strong> do Blog</h2>
                            <div class="row">
                                <div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
                                    @php
                                    $blog = [];
                                    for($i=0; $i < 5; $i++){
                                        $blog[$i]['title'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.';
                                        $blog[$i]['content'] = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est, in consequat libero.';
                                    }
                                    @endphp
                                    <div>
                                    @foreach($blog as $b)                                    
                                        <div class="col-md-6">
                                            <article>
                                                <div class="date">
                                                    <span class="day">15</span>
                                                    <span class="month">Jan</span>
                                                </div>
                                                <h4 class="heading-primary"><a href="blog-post.html">{{ $b['title'] }}</a></h4>
                                                <p>{{ $b['title'] }}<a href="/" class="read-more">read more <i class="fa fa-angle-right"></i></a></p>
                                            </article>
                                        </div> 
                                    @if($loop->iteration % 2 == 0 && !$loop->last)  
                                    </div> 
                                    <div>
                                    @endif
                                    @endforeach
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2>O que dizem os <strong>clientes</strong></h2>
                        <div class="row">
                            <div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1}">
                                <div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p>A Confraria Web vem fazendo muita diferença no sucesso do grupo graças ao olhar estratégico que dá à nossa equipe na hora de estruturar nossas campanhas no Google Adwords e ao fazer intervenções assertivas das análises dos resultados e principalmente na agilidade da implementação das soluções necessárias para melhoria contínua.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail img-thumbnail">
                                                    <img src="{{ asset('assets/site/porto/img/clients/client-1.jpg') }}" alt="">
                                                </div>
                                                <p><strong>Marcos Ferreira</strong><span>Diretor - Great Group</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--div>
                                    <div class="col-md-12">
                                        <div class="testimonial testimonial-primary">
                                            <blockquote>
                                                <p>Estamos satisfeitos com os resultados obtidos pelo site desenvolvido pela Confraria Web. Apresenta acesso fácil aos vários produtos, permite que o cliente identifique pelos campos de digitação suas necessidades, e também, não menos importante, é o fato dele permanecer ativo em todos os momentos, com assessoria ágil e prestativa em caso de necessidades. Recomendamos a Confraria Web.</p>
                                            </blockquote>
                                            <div class="testimonial-arrow-down"></div>
                                            <div class="testimonial-author">
                                                <div class="testimonial-author-thumbnail img-thumbnail">
                                                    <img src="{{ asset('assets/site/porto/img/clients/client-1.jpg') }}" alt="">
                                                </div>
                                                <p><strong>Rafael Ferreira</strong><span>Gerente de Relacionamento - Okler</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
</div>

@endsection