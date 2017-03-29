@extends('site.fleek.layouts.default')

@section('content')

<section id="internas-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Notícias</h1>
                            <h2>Fique por dentro do que fazemos!</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="noticias" class="noticias-interna-single">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <article>
                                <h1>{{ $post->title }}</h1>
                                <p class="news-info">{{ $post->created_at }}</p>
                                <img src="{{ asset($options->imagem) }}" class="img img-responsive" alt="">
                                <div class="noticia-text">
                                    <p>{{ $post->content }}</p>
                                </div>
                                <!--div class="share">
                                    <ul>
                                        <li><a href=""><img src="img/005-facebook.svg" alt="" class="img img-responsive"></a></li>
                                        <li><a href=""><img src="img/003-twitter.svg" alt="" class="img img-responsive"></a></li>
                                        <li><a href=""><img src="img/001-google-plus.svg" alt="" class="img img-responsive"></a></li>
                                        <li><a href=""><img src="img/002-pinterest.svg" alt="" class="img img-responsive"></a></li>
                                        <li><a href=""><img src="img/004-rss.svg" alt="" class="img img-responsive"></a></li>
                                    </ul>
                                </div-->
                            </article>
                        </div>
                        <div class="col-md-3 other-noticias">
                            <div class="row">
                                <h3>Posts Recentes</h3>
                                @foreach($posts->where('type_id', 2)->take(3) as $awei)
                                <div class="col-md-12 news-content">
                                    <img src="{{ asset($awei['options']->imagem) }}" class="img img-responsive" alt="">
                                    <h3>{{$awei->title}}</h3>
                                    <p class="news-info">{{ $awei->created_at }}</p>
                                    <p class="news-excerpt">{{str_limit($awei->content, 150)}}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection