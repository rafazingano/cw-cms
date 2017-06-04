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
                    <h1>Careers</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <h2><strong>Rockstars</strong> wanted!</h2>

        <div class="row">
            <div class="col-md-12">
                <p class="lead">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque rutrum pellentesque imperdiet. Nulla lacinia iaculis nulla non pulvinar. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut eu risus enim, ut pulvinar lectus. Sed hendrerit nibh metus.
                </p>
            </div>
        </div>

        <hr>

        <div class="row">
            <div class="col-md-8">
                <div class="toggle toggle-primary mt-lg" data-plugin-toggle>
                    <section class="toggle">
                        <label>Technical Support Representative</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Copywriter</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Customer Care Specialist</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Interactive Art Director</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Mobile Developer</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Technical Support Representative</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Copywriter</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                    <section class="toggle">
                        <label>Customer Care Specialist</label>
                        <div class="toggle-content">
                            <p><strong>Location:</strong> New York - <strong>Department:</strong> Engineering</p>
                            <p>Mauris elit velit, lobortis sed interdum at, vestibulum vitae libero. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque iaculis ligula ut ipsum mattis viverra. </p>
                            <p><a class="btn btn-primary mb-xl" href="#">Apply Now</a></p>
                        </div>
                    </section>
                </div>
            </div>
            <div class="col-md-4">
                <div class="featured-box featured-box-primary">
                    <div class="box-content">
                        <h4 class="text-uppercase">The Benefits</h4>
                        <ul class="thumbnail-gallery" data-plugin-lightbox data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                            <li>
                                <a title="Benefits 1" href="img/benefits/benefits-1.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-1-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 2" href="img/benefits/benefits-2.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-2-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 3" href="img/benefits/benefits-3.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-3-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 4" href="img/benefits/benefits-4.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-4-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 5" href="img/benefits/benefits-5.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-5-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a title="Benefits 6" href="img/benefits/benefits-6.jpg">
                                    <span class="thumbnail mb-none">
                                        <img src="img/benefits/benefits-6-thumb.jpg" alt="">
                                    </span>
                                </a>
                            </li>
                        </ul>

                        <hr>

                        <ul class="list list-icons align-left">
                            <li><i class="fa fa-check"></i>Health insurance</li>
                            <li><i class="fa fa-check"></i>Retirement investment plans</li>
                            <li><i class="fa fa-check"></i>Vacation time</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection