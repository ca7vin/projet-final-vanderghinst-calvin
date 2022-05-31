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
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li><a href="{{ Route('dashboard') }}">Dashboard</a></li>
                            <form action="{{ Route('logout') }}" method="POST">
                                @csrf
                                <li><button type='submit'>Logout</button></li>
                            </form>
                        @else
                            <li><a href="{{ Route('login') }}">Login</a></li>
                            <li><a href="{{ Route('register') }}">Register</a></li>
                        @endauth
                    @endif
                </ul>
            </div>
            <nav class="main-navigation text-left hidden-xs hidden-sm">
                <ul>
                    <li><a href="{{ Route('home') }}" class="">Home</a></li>
                    <li><a href="{{ Route('courses') }}" class="">Courses</a></li>
                    <li><a href="{{ Route('events') }}" class="">Events</a></li>
                    <li><a href="{{ Route('news') }}" class="">News</a></li>
                    <li><a href="{{ Route('contact') }}" class="">Contact</a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>
