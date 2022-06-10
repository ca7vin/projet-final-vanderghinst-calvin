@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">

        <div class="sidebar-menu-push">

            <div class="sidebar-menu-overlay"></div>

            <div class="sidebar-menu-inner">

                @include('front.partials.header')


                <div class="page-heading teachers-heading"
                    style='background-image:url({{ asset('images/wallpaperteachers.jpg') }}) !important;'>
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
                @if (session()->has('message'))
                    <div class='alert alert-success d-flex align-items-center justify-content-center'>
                        <p style='text-align: center !important;'>{{ session()->get('message') }}</p>
                    </div>
                @endif
                @if ($errors->any())
                    <div class='alert alert-danger d-flex align-items-center justify-content-center'>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <section class="single-teacher">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <div class="single-teacher-item">
                                    <div class="row">
                                        <div class="col-md-5">
                                            <img src="{{ asset('images/' . $prof->user->image) }}" alt="">
                                            @if (Route::has('login'))
                                                @auth
                                                    <form class='d-flex flex-column align-items-center justify-content-center'
                                                        action='{{ route('messages.store') }}' method='post'>
                                                        @csrf
                                                        <div class="contact-form">
                                                            <h4>Contact me</h4>
                                                            <input style='display: none !important;' type="text" id="name"
                                                                name="to" placeholder="Full Name"
                                                                value="{{ $prof->user->name }}">
                                                            <input type="text" id="name" name='from' name="user" placeholder="Full Name"
                                                                value="{{ Auth::user()->name }}">
                                                            <input type="text" id="address"
                                                                placeholder="E-mail Address"
                                                                value="{{ Auth::user()->email }}">
                                                            <textarea id="message" class="message" name="content" placeholder="Write message"></textarea>
                                                        </div>
                                                        <button class='btn' type='submit'
                                                            style='background-color:#F5A425 !important; color:white !important;'>Send
                                                            a message</button>
                                                    </form>
                                                @else
                                                    @if (Route::has('login'))
                                                        <div class='contact-form'>
                                                            <h4>Contact me</h4>
                                                            <div class='notLogin'>
                                                                <div class="accent-button">
                                                                    <a href="{{ Route('login') }}">Log in</a>
                                                                </div>
                                                                <div class="accent-button" style='margin-top:20px !important;'>
                                                                    <a href="{{ Route('register') }}">Sign in</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                @endauth
                                            @endif
                                        </div>
                                        <div class="col-md-7">
                                            <div class="right-info">
                                                <div class="name">
                                                    <h2>{{ $prof->user->name }}</h2>
                                                    <span>{{ $prof->subject }}</span>
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
                                                    <p>{{ $prof->bio_short }}</p>
                                                    <h4>Biography</h4>
                                                    <p>{{ $prof->bio_long }}</p>
                                                    <ul>
                                                        <li><i class="fa fa-phone"></i>{{ $prof->phone }}</li>
                                                        <li><i class="fa fa-envelope"></i><a href="#">
                                                                samuel@delossantos.com</a></li>
                                                        <li><i class="fa fa-skype"></i><a
                                                                href="#">{{ $prof->skype }}</a>
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
