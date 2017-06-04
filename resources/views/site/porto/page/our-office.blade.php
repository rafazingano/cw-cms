@extends('site.porto.layouts.default')

@section('title', isset($options->meta_title)? $options->meta_title : 'Post')
@section('description', isset($options->meta_description)? $options->meta_description : 'Post')
@section('author', isset($options->meta_author)? $options->meta_author : 'Post')

@section('content')

<div role="main" class="main">

    <section class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a></li>
                        <li class="active">Pages</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Our Office</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="owl-carousel owl-theme mb-none" data-plugin-options="{'items': 1, 'animateOut': 'fadeOut', 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img alt="" class="img-responsive img-rounded" src="img/office/our-office-1.jpg">
                    </div>
                    <div>
                        <img alt="" class="img-responsive img-rounded" src="img/office/our-office-3.jpg">
                    </div>
                </div>
            </div>
        </div>

        <hr class="tall">

        <div class="row">
            <div class="col-md-7">
                <h2>A place where amazing things <strong>Get Done!</strong></h2>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.</p>

                <p>Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.</p>

                <div class="row mt-xlg mb-xl">
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-xs">12 years in business</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing <span class="alternative-font">metus.</span> elit. Quisque rutrum pellentesque imperdiet.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box feature-box-style-2">
                            <div class="feature-box-icon">
                                <i class="fa fa-heart"></i>
                            </div>
                            <div class="feature-box-info">
                                <h4 class="heading-primary mb-xs">Loved by customers</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="tall">

                <h4>Work <strong>Space</strong></h4>

                <div data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="row">
                        <div class="col-md-4">
                            <a class="img-thumbnail mb-xl" href="img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
                                <img class="img-responsive" src="img/office/our-office-1.jpg" alt="Office">
                                <span class="zoom">
                                    <i class="fa fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img-thumbnail mb-xl" href="img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
                                <img class="img-responsive" src="img/office/our-office-2.jpg" alt="Office">
                                <span class="zoom">
                                    <i class="fa fa-search"></i>
                                </span>
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a class="img-thumbnail mb-xl" href="img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
                                <img class="img-responsive" src="img/office/our-office-3.jpg" alt="Office">
                                <span class="zoom">
                                    <i class="fa fa-search"></i>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-5">
                <h4>Our <strong>Location</strong></h4>

                <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
                <div id="googlemaps" class="google-map small"></div>

                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>

                <hr>

                <h4>Business <strong>Hours</strong></h4>
                <ul class="list list-icons list-dark mt-xlg">
                    <li><i class="fa fa-clock-o"></i> Monday - Friday - 9am to 5pm</li>
                    <li><i class="fa fa-clock-o"></i> Saturday - 9am to 2pm</li>
                    <li><i class="fa fa-clock-o"></i> Sunday - Closed</li>
                </ul>
            </div>
        </div>

    </div>

</div>

@endsection