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
            <section id="noticias">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="row">
                                @foreach($posts as $post)
                                <div class="col-md-3 col-sm-6 news-content">
                                    <a href="{{ url($post->slug) }}" title="{{ $post->title }}">
                                        <img src="{{ asset($post['options']->imagem) }}" class="img img-responsive" alt="">
                                        <h3>{{ $post->title }}</h3>
                                        <p class="news-info">{{ $post->created_at }}</p>
                                        <p class="news-excerpt">{{str_limit($post->content, 150)}}</p>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                            <div class="row">
                                <a href="" class="btn btn-more">CARREGAR MAIS</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

@endsection