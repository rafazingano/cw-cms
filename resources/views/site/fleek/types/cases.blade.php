@extends('site.fleek.layouts.default')

@section('content')

<section id="internas-header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1>Cases</h1>
                            <h2>Clientes e parceiros que acreditam no nosso trabalho</h2>
                        </div>
                    </div>
                </div>
            </section>
            <section id="portfolio">
                <div class="container">
                    <div class="row">
                        @foreach($posts as $post)
                        <div class="portfolio-item col-sm-3 col-xs-12">
                            <div class="portfolio-logo">
                                <img src="{{ asset($post['options']->imagem) }}" class="img img-responsive" alt="{{ $post->title }}" />
                            </div>
                            <div class="portfolio-info">
                                <div class="info-text">
                                    <h3>{{ $post->title }}</h3>
                                    <h4></h4>
                                </div>
                                
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>

@endsection