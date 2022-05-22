@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">

        <div class="sidebar-menu-push">

            <div class="sidebar-menu-overlay"></div>

            <div class="sidebar-menu-inner">

                @include('front.partials.header')


                <div class="page-heading teachers-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Single Teacher</h1>
                                <span>Salvia next level crucifix pickled heirloom synth</span>
                                <div class="page-list">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="#">Pages</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="our-teachers.html">Single Teacher</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="single-teacher">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="single-teacher-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="http://placehold.it/370x275" alt="">
                                            <div class="contact-form">
                                                <h4>Contact me</h4>
                                                <input type="text" id="name" name="s" placeholder="Full Name" value="">
                                                <input type="text" id="address" name="s" placeholder="E-mail Address"
                                                    value="">
                                                <textarea id="message" class="message" name="message" placeholder="Write message"></textarea>
                                                <div class="accent-button">
                                                    <a href="#">Send Message</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="right-info">
                                                <div class="name">
                                                    <h2>Samuel Delossantos</h2>
                                                    <span>Math Teacher</span>
                                                    <img src={{ asset('images/line-dec.png') }} alt="">
                                                </div>
                                                <div class="icons">
                                                    <ul>
                                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="description">
                                                    <p>Vinyl keffiyeh gluten-free, health goth stumptown chambray typewriter
                                                        ugh. McSweeney gastropub cardigan, banjo Thundercats bitters health
                                                        goth tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan
                                                        McSweeney's.</p>
                                                    <h4>Biography</h4>
                                                    <p><em>Food truck four loko swag, try-hard Williamsburg you probably
                                                            haven heard of them pork belly bitters.</em><br><br>Vinyl
                                                        keffiyeh gluten-free, health goth stumptown chambray typewriter ugh.
                                                        McSweeney gastropub cardigan, banjo Thundercats bitters health goth
                                                        tofu freegan. Pop-up Pinter 90's farm-to-table locavore seitan
                                                        McSweeney's.<br><br>Thundercats Shoreditch polaroid biodiesel put a
                                                        bird on it. McSweeney's stumptown blog vinyl, pop-up crucifix Tumblr
                                                        messenger bag hella fap disrupt meh. Cred butcher gluten-free twee
                                                        Pinterest tofu banh mi, mustache typewriter chia.</p>
                                                    <ul>
                                                        <li><i class="fa fa-phone"></i>910-213-7890</li>
                                                        <li><i class="fa fa-envelope"></i><a href="#">
                                                                samuel@delossantos.com</a></li>
                                                        <li><i class="fa fa-skype"></i><a href="#">samueldelossantos1</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @include('front.partials.calltoaction')
                @include('front.partials.footer')
                <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>

        @include('front.partials.sidebar')
    </div>
@endsection
