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
                        <li class="active">Blog</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Timeline</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts">

                    <section class="timeline">
                        <div class="timeline-body">
                            <div class="timeline-date">
                                <h3 class="heading-primary">January 2017</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="post-content">
                                            <h4 class="heading-primary"><a href="blog-post.html">Class aptent taciti sociosqu ad litora.</a></h4>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2017 </span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                    </div>
                                </div>

                            </article>

                            <article class="timeline-box right post post-medium">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-3.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="post-content">
                                            <h4 class="heading-primary"><a href="blog-post.html">Class aptent taciti sociosqu ad litora.</a></h4>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2017 </span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                    </div>
                                </div>

                            </article>

                            <article class="timeline-box left post post-medium">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-3.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="post-content">
                                            <h4 class="heading-primary"><a href="blog-post.html">Class aptent taciti sociosqu ad litora.</a></h4>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> January 10, 2017 </span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                    </div>
                                </div>

                            </article>

                            <div class="timeline-date">
                                <h3 class="heading-primary">Dezember 2015</h3>
                            </div>

                            <article class="timeline-box left post post-medium">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="post-content">
                                            <h4 class="heading-primary"><a href="blog-post.html">Class aptent taciti sociosqu ad litora.</a></h4>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> Dezember 10, 2015 </span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                    </div>
                                </div>

                            </article>

                            <article class="timeline-box right post post-medium">
                                <div class="row">

                                    <div class="col-md-12">
                                        <div class="post-image">
                                            <div class="owl-carousel owl-theme" data-plugin-options="{'items':1}">
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-2.jpg" alt="">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="img-thumbnail">
                                                        <img class="img-responsive" src="img/blog/blog-image-1.jpg" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">

                                        <div class="post-content">
                                            <h4 class="heading-primary"><a href="blog-post.html">Class aptent taciti sociosqu ad litora.</a></h4>
                                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. </p>
                                        </div>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-calendar"></i> Dezember 10, 2015 </span><br>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="post-meta">
                                            <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                            <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                            <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                                    </div>
                                </div>

                            </article>

                            <div class="timeline-date">
                                <h3 class="heading-primary"><a href="#">Load More...</a></h3>
                            </div>

                        </div>

                    </section>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection