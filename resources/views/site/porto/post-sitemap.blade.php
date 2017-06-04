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
                    <h1>Sitemap</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <div class="row">

            <div class="col-md-4">
                <ul class="nav nav-list mb-xl">
                    <li><a href="index.html">Home</a></li>
                    <li>
                        <a href="#">About Us</a>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Me</a></li>
                        </ul>
                    </li>
                    <li><a href="page-team.html">Team</a></li>
                    <li><a href="page-services.html">Services</a></li>
                    <li><a href="page-careers.html">Careers</a></li>
                    <li><a href="page-our-office.html">Our Office</a></li>
                    <li><a href="page-faq.html">FAQ</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
            </div>

            <div class="col-md-6 col-md-offset-2 hidden-xs">
                <h2 class="mb-lg">Who <strong>We Are</strong></h2>
                <p class="lead">Curabitur pellentesque neque eget diam posuere porta. Quisque ut nulla at nunc vehicula lacinia. Proin adipiscing porta tellus, ut feugiat nibh adipiscing sit amet.</p>
                <ul class="list list-icons mt-xl">
                    <li><i class="fa fa-check"></i>Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i>Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i>Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. </li>
                    <li><i class="fa fa-check"></i>Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i>Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                    <li><i class="fa fa-check"></i>Fusce sit amet orci quis arcu vestibulum vestibulum sed ut felis. </li>
                    <li><i class="fa fa-check"></i>Phasellus in risus quis lectus iaculis vulputate id quis nisl.</li>
                </ul>
            </div>

        </div>

    </div>

</div>

@endsection