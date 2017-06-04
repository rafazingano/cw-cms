@extends('site.porto.layouts.default')

@section('title', isset($options->meta_title)? $options->meta_title : 'Post')
@section('description', isset($options->meta_description)? $options->meta_description : 'Post')
@section('author', isset($options->meta_author)? $options->meta_author : 'Post')

@section('content')

<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12 center">
                <div class="logo">
                    <a href="index.html">
                        <img width="111" height="54" src="img/logo-default.png" alt="Porto">
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 center">
                <h1 class="mb-sm small">MAINTENANCE MODE</h1>
                <p class="lead">The website is undergoing some scheduled maintenance.<br>Please come back later.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <hr class="tall">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-support"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Whats this about?</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing metus elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-clock-o"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Come back later</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="feature-box">
                            <div class="feature-box-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4>Get in Touch</h4>
                                <p class="tall">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection