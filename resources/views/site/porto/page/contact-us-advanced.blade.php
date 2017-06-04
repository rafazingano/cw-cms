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
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us Advanced</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
    <div id="googlemaps" class="google-map"></div>

    <div class="container">

        <div class="row">
            <div class="col-md-6">

                <div class="offset-anchor" id="contact-sent"></div>


                <h2 class="mb-sm mt-sm"><strong>Contact</strong> Us</h2>
                <form id="contactFormAdvanced" action="contact-us-advanced.php#contact-sent" method="POST" enctype="multipart/form-data">
                    <input type="hidden" value="true" name="emailSent" id="emailSent">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <label>Your name *</label>
                                <input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label>Your email address *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Subject</label>
                                <select data-msg-required="Please enter the subject." class="form-control" name="subject" id="subject" required>
                                    <option value="">...</option>
                                    <option value="Option 1">Option 1</option>
                                    <option value="Option 2">Option 2</option>
                                    <option value="Option 3">Option 3</option>
                                    <option value="Option 4">Option 4</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Checkboxes</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="checkbox-group" data-msg-required="Please select at least one option.">
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox1" value="option1"> 1
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox2" value="option2"> 2
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox3" value="option3"> 3
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox4" value="option4"> 4
                                            </label>
                                            <label class="checkbox-inline">
                                                <input type="checkbox" name="checkboxes[]" id="inlineCheckbox5" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <label>Radios</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="radio-group" data-msg-required="Please select one option.">
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio1" value="option1"> 1
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio2" value="option2"> 2
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio3" value="option3"> 3
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio4" value="option4"> 4
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="radios" id="inlineRadio5" value="option5"> 5
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Attachment</label>
                                <input type="file" name="attachment" id="attachment">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>Message *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="6" class="form-control" name="message" id="message" required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Human Verification *</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-4">
                                <div class="captcha form-control">
                                    <div class="captcha-image">
                                        <img id="captcha-image" src="php/simple-php-captcha/simple-php-captcha.php//porto/5.7.2/php/simple-php-captcha/simple-php-captcha.php?_CAPTCHA&amp;t=0.81896300+1495661288" alt="CAPTCHA code">												</div>
                                    <div class="captcha-refresh">
                                        <a href="#" id="refreshCaptcha"><i class="fa fa-refresh"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <input type="text" value="" maxlength="6" data-msg-captcha="Wrong verification code." data-msg-required="Please enter the verification code." placeholder="Type the verification code." class="form-control input-lg captcha-input" name="captcha" id="captcha" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <hr>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <input type="submit" id="contactFormSubmit" value="Send Message" class="btn btn-primary btn-lg pull-right" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-6">

                <h4 class="heading-primary mt-lg">Get in <strong>Touch</strong></h4>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut feugiat urna arcu, vel molestie nunc commodo non. Nullam vestibulum odio vitae fermentum rutrum.</p>

                <p>Mauris lobortis nulla ut aliquet interdum. Donec commodo ac elit sed placerat. Mauris rhoncus est ac sodales gravida. In eros felis, elementum aliquam nisi vel, pellentesque faucibus nulla.</p>

                <hr>

                <h4 class="heading-primary">The <strong>Office</strong></h4>
                <ul class="list list-icons list-icons-style-3 mt-xlg">
                    <li><i class="fa fa-map-marker"></i> <strong>Address:</strong> 1234 Street Name, City Name, United States</li>
                    <li><i class="fa fa-phone"></i> <strong>Phone:</strong> (123) 456-789</li>
                    <li><i class="fa fa-envelope"></i> <strong>Email:</strong> <a href="mailto:mail@example.com">mail@example.com</a></li>
                </ul>

                <div class="row lightbox mt-xl" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}}">
                    <div class="col-md-4">
                        <a class="img-thumbnail" href="img/office/our-office-1.jpg" data-plugin-options="{'type':'image'}">
                            <img class="img-responsive" src="img/office/our-office-1.jpg" alt="Office">
                            <span class="zoom">
                                <i class="fa fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-thumbnail" href="img/office/our-office-2.jpg" data-plugin-options="{'type':'image'}">
                            <img class="img-responsive" src="img/office/our-office-2.jpg" alt="Office">
                            <span class="zoom">
                                <i class="fa fa-search"></i>
                            </span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <a class="img-thumbnail" href="img/office/our-office-3.jpg" data-plugin-options="{'type':'image'}">
                            <img class="img-responsive" src="img/office/our-office-3.jpg" alt="Office">
                            <span class="zoom">
                                <i class="fa fa-search"></i>
                            </span>
                        </a>
                    </div>
                </div>

                <hr>

                <h4 class="heading-primary">Business <strong>Hours</strong></h4>
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