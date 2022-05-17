@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
				@include('front/partials/header')
                <div class="page-heading news-heading">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Contact Us</h1>
                                <span>Salvia next level crucifix pickled heirloom synth</span>
                                <div class="page-list">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @include('front/partials/joinus/contactinfo')
                @include('front/partials/joinus/contactform')
                @include('front/partials/calltoaction')
                @include('front/partials/footer')
                <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
        @include('front/partials/sidebar')
    </div>
@endsection
