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
                    <h1>Full Width</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="blog-posts">

                    <article class="post post-large">
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
                                <div>
                                    <div class="img-thumbnail">
                                        <img class="img-responsive" src="img/blog/blog-image-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>

                        </div>
                    </article>

                    <article class="post post-large">
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

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>

                        </div>
                    </article>

                    <article class="post post-large">
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

                        <div class="post-date">
                            <span class="day">10</span>
                            <span class="month">Jan</span>
                        </div>

                        <div class="post-content">

                            <h2><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>
                            <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Pellentesque pellentesque tempor tellus eget hendrerit. Morbi id aliquam ligula. Aliquam id dui sem. Proin rhoncus consequat nisl, eu ornare mauris tincidunt vitae. [...]</p>

                            <div class="post-meta">
                                <span><i class="fa fa-user"></i> By <a href="#">John Doe</a> </span>
                                <span><i class="fa fa-tag"></i> <a href="#">Duis</a>, <a href="#">News</a> </span>
                                <span><i class="fa fa-comments"></i> <a href="#">12 Comments</a></span>
                                <a href="blog-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
                            </div>

                        </div>
                    </article>

                    <ul class="pagination pagination-lg pull-right">
                        <li><a href="#">«</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">»</a></li>
                    </ul>

                </div>
            </div>

        </div>

    </div>

</div>

@endsection