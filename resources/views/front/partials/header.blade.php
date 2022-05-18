<header class="site-header">
    <div id="main-header" class="main-header header-sticky">
        <div class="inner-header container clearfix">
            <div class="logo">
                <a href="{{ Route('home') }}"><img src={{ asset('images/logo.png') }} alt=""></a>
            </div>
            <div class="header-right-toggle pull-right hidden-md hidden-lg">
                <a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
            </div>
            <div class="header-info hidden-sm hidden-xs">
                <ul>
                    <li><i class="fa fa-phone"></i>+49 233 322 333</li>
                    <li><i class="fa fa-envelope-o"></i>your@website.com</li>
                    <li class="language">
                        <p><a href="#" id="example-show" class="showLink"
                                onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i
                                    class="fa fa-angle-down"></i></a>
                        </p>
                        <div id="example" class="more">
                            <p><a href="#" id="example-hide" class="hideLink"
                                    onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i
                                        class="fa fa-angle-up"></i></a>
                            </p>
                            <form method="get" id="blog-search" class="blog-search">
                                <ul>
                                    <li><a href="#">English</a></li>
                                    <li><a href="#">Dutch</a></li>
                                    <li><a href="#">Albanian</a></li>
                                </ul>
                            </form>
                        </div>
                    </li>
                    <li><a href="#">Apply Now</a></li>
                </ul>
            </div>
            <nav class="main-navigation text-left hidden-xs hidden-sm">
                <ul>
                    <li><a href="{{ Route('home') }}" class="">Home</a></li>
                    <li><a href="{{ Route('courses') }}" class="">Courses</a></li>
                    <li><a href="{{ Route('events') }}" class="">Events</a></li>
                    <li><a href="{{ Route('news') }}" class="">News</a></li>
                    <li><a href="{{ Route('contact') }}" class="">Contact</a></li>
                    <li><a href="#search"><i class="fa fa-search"></i></a></li>
                    <li>
                        @if (Route::has('login'))
                        @auth
                            <div style='display: flex; align-items: center; justify-content: space-around; margin-top: 20px;'>
                                <a href="{{ url('/dashboard') }}" class='btn p-5'
                                    style='color: white; background-color: #A12C2F'>Dashboard</a>
                                <form action="{{ route('logout') }}" method='post' style='margin-left: 10px;'>
                                    @csrf
                                    {{-- @method('POST') --}}
                                    <a href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();" class='btn p-5' style='color: white; background-color: #A12C2F'
                                        type='submit'>Logout</a>
                                </form>
                            </div>
                        @else
                        <div style='display: flex; align-items: center; justify-content: space-around; margin-top: 20px;'>
                            <a href="{{ route('login') }}" class='btn p-5'
                                style='color: white; background-color: #A12C2F'>Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class='btn p-5'
                                    style='color: white; background-color: #A12C2F; margin-left: 10px;'>Register</a>
                            @endif
                        </div>
                        @endauth
                        @endif
                    </li>
        </div>
        </ul>
        </nav>
    </div>
    </div>
</header>
