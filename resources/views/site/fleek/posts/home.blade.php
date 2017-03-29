@extends('site.fleek.layouts.default')

@section('title', isset($options->meta_title)? $options->meta_title : 'Home')
@section('description', isset($options->meta_description)? $options->meta_description : 'Home')
@section('author', isset($options->meta_author)? $options->meta_author : 'Home')

@section('content')
            <section id="main-header">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-6 jumbotron-mobile">
                                <h1>A SUA NOVA AGÊNCIA DE MARKETING DIGITAL</h1>
                                <h2>A Fleek tem a solução correta para você</h2>
                                <a href="{{ url('sobre-a-fleek') }}" class="btn btn-about">CONHEÇA A FLEEK >></a>
                            </div>
                            <div class="col-md-5 col-sm-6">
                                <div class="form-contato">
                                    @if (session('message'))
                                    <div class="alert alert-success">
                                        {{ trans(session('message')) }}
                                    </div>
                                    @endif
                                    <form action="{{ route('lead.store') }}" accept-charset="UTF-8" method="post">
                                        <h4>ENTRE EM CONTATO</h4>
                                        {!! csrf_field() !!}
                                        <input type="text" class="form-control" required name="name" id="name" placeholder="Nome" />
                                        <input type="email" class="form-control" required name="email" id="email" placeholder="E-mail" />
                                        <input type="text" class="form-control" required name="phone" id="phone" placeholder="Telefone" />
                                        <select class="form-control" required name="assunto" id="assunto" placeholder="Assunto">
                                            <option value="" style="display:none;">Assunto</option>
                                            <optgroup label="Não sou cliente">
                                                <option value="orcamento-naocliente">Orçamento</option>
                                                <option value="duvida-naocliente">Dúvida</option>
                                            </optgroup>
                                            <optgroup label="Já sou cliente">
                                                <option value="orcamento-simcliente">Orçamento</option>
                                                <option value="duvida-simcliente">Dúvida</option>
                                            </optgroup>
                                            <option value="outros">Outros</option>
                                        </select>
                                        <textarea name="content" id="content" requireds cols="30" rows="5" class="form-control" placeholder="Mensagem"></textarea>
                                        <input type="submit" name="enviar" value="ENVIAR" class="btn btn-submit" />
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <section id="nossos-servicos">
                <div class="container">
                    <h1>NOSSOS SERVIÇOS</h1>
                    <h2>Saiba mais sobre o que podemos fazer por você</h2>
                    <div class="servicos-tree">
                        <div class="servicos-item" id="sites">
                            <div class="servico-front">
                                <img src="{{ asset('assets/site/fleek/img/icon-sites.png') }}" alt="Ícone Criação de Sites" title="Criação de Sites">
                                CRIAÇÃO DE SITES
                            </div>
                            <div class="servico-back lines-6">Criação de sites profissionais. Temos a melhor opção para você</div>
                        </div>
                        <div class="servicos-item" id="idvisual">
                            <div class="servico-front">
                                <img src="{{ asset('assets/site/fleek/img/icon-idvisual.png') }}" alt="Ícone Identidade Visual" title="Identidade Visual" />
                                IDENTIDADE VISUAL
                            </div>
                            <div class="servico-back lines-6">O Design Gráfico é capaz de transmitir a essência do seu negócio</div>
                        </div>
                        <div class="servicos-item" id="seo">
                            <div class="servico-front">
                                <img src="{{ asset('assets/site/fleek/img/icon-seo.png') }}" alt="Ícone Links Patrocinados" title="Links Patrocinados" />
                                LINKS PATROCINADOS
                            </div>
                            <div class="servico-back">Anuncie no Google e garanta melhores resultados</div>
                        </div>
                        <div class="servicos-item" id="leadfone">
                            <div class="servico-front lines-1">
                                <img src="{{ asset('assets/site/fleek/img/icon-leadfone.png') }}" alt="Ícone Leadfone" title="Fleekfone" />
                                FLEEKFONE
                            </div>
                            <div class="servico-back lines-5">Telefone rastreável perfeito para mensurar campanhas</div>
                        </div>
                        <div class="servicos-item" id="lp">
                            <div class="servico-front lines-1">
                                <img src="{{ asset('assets/site/fleek/img/icon-lp.png') }}" alt="Ícone Landing Page" title="Landing Page" />
                                LANDING PAGE
                            </div>
                            <div class="servico-back lines-5">Landing Page é ótimo para converter e trazer resultados</div>
                        </div>
                        <div class="servicos-item" id="smm">
                            <div class="servico-front lines-3">
                                <img src="{{ asset('assets/site/fleek/img/icon-smm.png') }}" alt="Ícone Gestão de Redes Sociais" title="Gestão de Redes Sociais" />
                                GESTÃO DE REDES SOCIAIS
                            </div>
                            <div class="servico-back lines-5">Divulgação do seu negócio dentro do Facebook e Instagram.</div>
                        </div>
                        <div class="servicos-item" id="ale1">
                            <div class="servico-front">
                                <img src="{{ asset('assets/site/fleek/img/icon-emkt-G.png') }}" alt="Ícone" title="E-mail Marketing" />
                                E-MAIL MARKETING
                            </div>
                            <div class="servico-back">Atinja milhares de pessoas com suas campanhas</div>
                        </div>
                        <div class="servicos-item" id="ale2">
                            <div class="servico-front lines-1">
                                <img src="{{ asset('assets/site/fleek/img/icon-seo2-G.png') }}" alt="Ícone SEO" title="SEO" />
                                SEO
                            </div>
                            <div class="servico-back">Tenha mais resultados sendo encontrado no Google</div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="depoimentos">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="depoimentos-carousel" class="owl-theme">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="quem-somos" class="parallax">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <h1>QUEM SOMOS</h1>
                            <h2>Marketing digital e o Grupo Agler</h2>
                            <p>A FLEEK pertence ao Grupo Agler e surgiu a partir de uma ideia de dois IRMÃOS. A missão era de atender o mercado PYMES dando a devida importância ao mesmo. É um mercado carente de atenção, onde agências focam nos médios e grandes, deixando os pequenos sem atenção. A FLEEK valoriza o investimento do pequeno e do micro, como se fosse nosso único ou último cliente.</p>
                            <a href="{{ url('sobre-a-fleek') }}" class="btn btn-more">SAIBA MAIS >></a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="bloco-aleatorio">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <h1>ESPECIALISTA EM MARKETING DIGITAL</h1>
                            <h2>Quero ser encontrado</h2>
                            <p>Atualmente é difícil não encontrar uma empresa na internet, seja ela grande ou pequena. Porém, em meio a essa multidão de negócios online que os grandes portais criaram, poucos são aquelas empresas que conseguem se destacar. Através da consultoria de marketing da Fleek, seu negócio deixa de ter visibilidade para ter encontrabilidade. Quero ser encontrado!</p>
                            <a href="{{ url('servicos') }}" class="btn btn-more">SAIBA MAIS >></a>
                        </div>
                        <div class="col-md-5">
                            <img src="{{ asset('assets/site/fleek/img/site-responsivo-agencia-fleek.jpg') }}" class="img img-responsive" alt="">
                        </div>
                    </div>
                </div>
            </section>            
            <section id="fleek">
                <div id="trigger-box-fleek" class="spacer s1"></div>
                <img src="{{ asset('assets/site/fleek/img/fleek-logo-2.png') }}" alt="">
                <h2>A SUA NOVA AGÊNCIA DE </h2>
                <h1>MARKETING DIGITAL</h1>
                <script>
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger-box-fleek"})
                        .setVelocity("#fleek>img",{'opacity':1},{duration: 300})
                        .addTo(controller);
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger-box-fleek"})
                        .setVelocity("#fleek>h2",{'opacity':1,'margin-top':0},{duration: 600})
                        .addTo(controller);
                    var scene = new ScrollMagic.Scene({triggerElement: "#trigger-box-fleek"})
                        .setVelocity("#fleek>h1",{'opacity':1,'margin-top':0},{duration: 900})
                        .addTo(controller);
                </script>
            </section>
            <section id="noticias">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>NOTÍCIAS</h1>
                            <h2>Fique por dentro do que fazemos!</h2>
                            <div class="row">
                                @foreach($posts->where('slug', 'noticias')->take(4) as $awei)
                                <div class="col-md-3 col-sm-6 news-content">
                                    <a href="{{ url($awei->slug) }}" title="{{$awei->title}}">
                                        <img src="{{ asset($awei['options']->imagem) }}" class="img img-responsive" alt="">
                                        <h3>{{$awei->title}}</h3>
                                        <p class="news-info">{{ $awei->created_at }}</p>
                                        <p class="news-excerpt">{{str_limit($awei->content, 150)}}</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <a href="{{ url('noticias') }}" class="btn btn-more">LEIA MAIS >></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection