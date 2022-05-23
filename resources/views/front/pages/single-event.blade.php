@extends('front.layouts.app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
                @include('front.partials.header')
                <div class="page-heading events-heading" style='background-image:url({{ asset("images/wallpaperevents.jpg") }}) !important;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Events Details</h1>
                                <span>Salvia next level crucifix pickled heirloom synth</span>
                                <div class="page-list">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="courses-grid.html">Event Details</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="single-event">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="event-slider">
                                    <ul class="slides">
                                        <li><img src="{{ asset('images/' . $event->image1) }}" alt=""></li>
                                        <li><img src="{{ asset('images/' . $event->image2) }}" alt=""></li>
                                        <li><img src="{{ asset('images/' . $event->image3) }}" alt=""></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="event-item">
                                    <div class="up-content">
                                        @if ($event->prof)
                                                        <img src="{{ asset('images/' . $event->prof->user->image) }}"
                                                            alt="">
                                                    @else
                                                        <img src="{{ asset('images/default.jpg') }}" alt="">
                                                    @endif
                                                    <h6>
                                                        @if ($event->prof)
                                                            {{ $event->prof->user->name }}
                                                        @else
                                                            Administrateur
                                                        @endif
                                                    </h6>
                                        <ul>
                                            <li><i class="fa fa-comment-o"></i>4</li>
                                            <li><i class="fa fa-star"></i>18</li>
                                        </ul>
                                    </div>
                                    <div class="down-content">
                                        <a href="{{ Route('event.onepage', $event->id) }}">
                                            <h4>{{ $event->title }}</h4>
                                        </a>
                                        <p>{{ $event->description }}</p>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="event-information">
                                    <div class="widget-heading">
                                        <h4>Event Details</h4>
                                    </div>
                                    <ul>
                                        <li><span>Starts:</span>{{ $event->date }}</li>
                                        <li><span>Time:</span>{{ $event->start_time }} - {{ $event->end_time }}</li>
                                        <li><span>Organizer:</span>{{ $event->user->name }}</li>
                                        <li><span>Phone:</span>{{ $event->phone }}</li>
                                        <li><span>Email:</span>{{ $event->mail }}</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="location-map">
                                    <div class="widget-heading">
                                        <h4>Location Map</h4>
                                    </div>
                                    <div id="map"></div>
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
