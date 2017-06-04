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
                    <h1>Team</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <h2>Meet the <strong>Team</strong></h2>

        <ul class="nav nav-pills sort-source" data-sort-id="team" data-option-key="filter">
            <li data-option-value="*" class="active"><a href="#">Show All</a></li>
            <li data-option-value=".leadership"><a href="#">Leadership</a></li>
            <li data-option-value=".marketing"><a href="#">Marketing</a></li>
            <li data-option-value=".development"><a href="#">Development</a></li>
            <li data-option-value=".design"><a href="#">Design</a></li>
        </ul>

        <hr>

        <div class="row">

            <div class="sort-destination-loader sort-destination-loader-showing">
                <ul class="team-list sort-destination" data-sort-id="team">
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item leadership">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-1.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">John Doe</span>
                                        <span class="thumb-info-type">CEO</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-2.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Jessica Doe</span>
                                        <span class="thumb-info-type">Marketing</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-3.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Rick Edward Doe</span>
                                        <span class="thumb-info-type">Developer</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item design">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-4.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Melinda Doe</span>
                                        <span class="thumb-info-type">Design</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-5.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Robert Doe</span>
                                        <span class="thumb-info-type">Design</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item marketing">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-6.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Melissa Doe</span>
                                        <span class="thumb-info-type">Marketing</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-7.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Will Doe</span>
                                        <span class="thumb-info-type">Developer</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                    <li class="col-md-3 col-sm-6 col-xs-12 isotope-item development">
                        <span class="thumb-info thumb-info-hide-wrapper-bg mb-xlg">
                            <span class="thumb-info-wrapper">
                                <a href="about-me.html">
                                    <img src="img/team/team-8.jpg" class="img-responsive" alt="">
                                    <span class="thumb-info-title">
                                        <span class="thumb-info-inner">Jerry Doe</span>
                                        <span class="thumb-info-type">Developer</span>
                                    </span>
                                </a>
                            </span>
                            <span class="thumb-info-caption">
                                <span class="thumb-info-caption-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ac ligula mi, non suscipitaccumsan.</span>
                                <span class="thumb-info-social-icons">
                                    <a target="_blank" href="http://www.facebook.com"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                                    <a href="http://www.twitter.com"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                                    <a href="http://www.linkedin.com"><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                                </span>
                            </span>
                        </span>
                    </li>
                </ul>
            </div>

        </div>

    </div>

</div>

@endsection