@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
                @include('front/partials/header')
                @include('front/partials/news/heading')
                @include('front/partials/news/news')
                @include('front/partials/calltoaction')
                @include('front/partials/footer')
                <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
            </div>
        </div>
        @include('front/partials/sidebar')
    </div>
@endsection
