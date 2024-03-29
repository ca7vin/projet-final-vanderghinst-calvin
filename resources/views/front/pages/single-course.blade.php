@extends('front.layouts.app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
                @include('front.partials.header')
                <div class="page-heading"
                    style='background-image:url({{ asset('images/wallpapercourses.jpg') }}) !important;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>Single Course</h1>
                                <span>Salvia next level crucifix pickled heirloom synth</span>
                                <div class="page-list">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="courses-grid.html">Single Course</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="single-course">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="single-item">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="item course-item">
                                                <div class="up-content">
                                                    <a href="{{ Route('course.onepage', $course->id) }}">
                                                        <h4>{{ $course->title }}</h4>
                                                    </a>
                                                    <p>Plaid you probably haven't heard of them fashion axe meditation</p>
                                                    @if ($course->prof)
                                                        <img src="{{ asset('images/' . $course->prof->user->image) }}"
                                                            alt="">
                                                    @else
                                                        <img src="{{ asset('images/default.jpg') }}" alt="">
                                                    @endif
                                                    <h6>
                                                        @if ($course->prof)
                                                            {{ $course->prof->user->name }}
                                                        @else
                                                            Administrateur
                                                        @endif
                                                    </h6>
                                                </div>
                                                <div class="courses-slider">
                                                    <ul class="slides">
                                                        <li data-thumb="http://placehold.it/140x100">
                                                            <img src="{{ asset('images/' . $course->image) }}" alt="" />
                                                        </li>
                                                        <li data-thumb="http://placehold.it/140x100">
                                                            <img src="{{ asset('images/' . $course->image) }}" alt="" />
                                                        </li>
                                                        <li data-thumb="http://placehold.it/140x100">
                                                            <img src="{{ asset('images/' . $course->image) }}" alt="" />
                                                        </li>
                                                        <li data-thumb="http://placehold.it/140x100">
                                                            <img src="{{ asset('images/' . $course->image) }}" alt="" />
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="description">
                                                <h4>Description</h4>
                                                <p>{{ $course->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="course-information">
                                    <div class="widget-heading">
                                        <h4>Course Information</h4>
                                    </div>
                                    <ul>
                                        <li><span>Starts:</span>{{ $course->start }}</li>
                                        <li><span>Duration:</span>{{ $course->duration }}</li>
                                        <li><span>Study Level:</span>{{ $course->level }}</li>
                                        <li><span>Disipline</span>Account &amp; Finance</li>
                                        <li><span>Price:</span>{{ $course->price }} / month</li>
                                    </ul>
                                </div>
                                <div class="categories">
                                    <div class="widget-heading">
                                        <h4>Categories</h4>
                                    </div>
                                    <ul>
                                        @foreach ($course->categories as $categorie)
                                            <form action="{{ Route('filterCatPost') }}" method="POST">
                                                @csrf
                                                <input name='category' type="text" class="hidden"
                                                    value={{ $categorie->id }}>
                                                <li><button class='btn' style='background-color:transparent !important;'><i
                                                            class="fa fa-angle-right"></i>{{ $categorie->name }}</button>
                                                </li>
                                            </form>
                                        @endforeach
                                    </ul>
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
