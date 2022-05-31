@extends('front.layouts.app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
                @include('front.partials.header')
                <div class="page-heading news-heading"
                    style='background-image:url({{ asset('images/wallpapernews.jpg') }}) !important;'>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h1>News</h1>
                                <span>Salvia next level crucifix pickled heirloom synth</span>
                                <div class="page-list">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><i class="fa fa-angle-right"></i></li>
                                        <li><a href="single-post.html">Single Post</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="single-post">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="classic-posts">
                                    <div class="single-item">

                                        <img src="{{ asset('images/' . $post->image) }}" alt="">

                                        <ul>
                                            <li>Posted: <em>{{ $post->created_at->translatedFormat('d F Y') }}</em></li>
                                            <li>By: <em>
                                                    @if ($post->redacteur)
                                                        {{ $post->redacteur->user->name }}
                                                    @else
                                                        Administrateur
                                                    @endif
                                                </em></li>
                                            <li>Comments: <em>2</em></li>
                                        </ul>
                                        <a href="{{ Route('post.onepage', $post->id) }}">
                                            <h4>New University Finder: Compare</h4>
                                        </a>
                                        <p>{{ $post->text }}</p>
                                        <div class="block"><em>{{ $post->quote }}</em></div>
                                        <p>{{ $post->text }}</p>
                                        <div class="tags-share">
                                            <div class="tag">
                                                <i class="fa fa-tags"></i>
                                                <p>Tags:</p><span><a href="#">School</a>, <a href="#">Students</a>, <a
                                                        href="#">Classrooms</a></span>
                                            </div>
                                            <div class="share">
                                                <div class="second-button">
                                                    <a href="#">Share <i class="fa fa-share-alt"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comments">
                                    <div class="heading">
                                        <h2>Comments</h2>
                                    </div>
                                    @foreach ($post->commentaires as $commentaire)
                                        <div class="comment-item">
                                            <img src="http://placehold.it/54x54" alt="">
                                            <h4>{{ $commentaire->user->name }}</h4>
                                            <span>{{ \Carbon\Carbon::parse($commentaire->created_at)->diffForHumans() }}</span>
                                            <div class="reply-button">
                                                <a href="#">Reply</a>
                                            </div>
                                            <p>{{ $commentaire->content }}</p>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="leave-comment">
                                    @if (Route::has('login'))
                                        @auth
                                            <div class="heading">
                                                <h2>Leave a comment</h2>
                                            </div>
                                            <div class="comment-form">
                                                <form action="{{ route('commentaire.store') }}" method='POST'>
                                                    @csrf
                                                    <div class="row">
                                                        <div class="col-md-6" style='display:none !important;'>
                                                            <input type="text" id="name" name="post_id" placeholder=""
                                                                value="{{ $post->id }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="name" name="" placeholder="Full Name"
                                                                value="{{ Auth::user()->name }}">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <input type="text" id="address" name=""
                                                                placeholder="E-mail Address"
                                                                value="{{ Auth::user()->email }}">
                                                        </div>
                                                        <div class="col-md-12">
                                                            <textarea id="message" class="message" name="content" placeholder="Write comment"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="accent-button">
                                                        <button style='border:none !important;' type='submit'>submit comment</button>
                                                    </div>
                                                </form>
                                            </div>
                                        @else
                                            @if (Route::has('login'))
                                                <div
                                                    style='display:flex !important; align-items:center !important; justify-content:center !important; background-color:#A12C2F;padding:20px !important;'>
                                                    <div class="accent-button" style='margin-right: 15px !important;'>
                                                        <a href="{{ Route('login') }}">Log in</a>
                                                    </div>
                                                    <div class="accent-button">
                                                        <a href="{{ Route('register') }}">Sign in</a>
                                                    </div>
                                                </div>
                                            @endif
                                        @endauth
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="side-bar">
                                    <div class="categories">
                                        <div class="widget-heading">
                                            <h4>Categories</h4>
                                        </div>
                                        <ul>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
                                            <li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li>
                                        </ul>
                                    </div>
                                    <div class="tags">
                                        <div class="widget-heading">
                                            <h4>Tags</h4>
                                        </div>
                                        <ul>
                                            <li><a href="#">Photography</a></li>
                                            <li><a href="#">Design</a></li>
                                            <li><a href="#">Envanto</a></li>
                                            <li><a href="#">Course</a></li>
                                            <li><a href="#">Education</a></li>
                                            <li><a href="#">College</a></li>
                                            <li><a href="#">Teachers</a></li>
                                            <li><a href="#">Read</a></li>
                                            <li><a href="#">Excursions</a></li>
                                        </ul>
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
