<header class="site-header">
    <div id="main-header" class="main-header header-sticky">
        <div class="inner-header container clearfix">
            <div class="logo">
                <a href="index.html"><img src={{ asset('images/logo.png') }} alt=""></a>
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
                                onclick="showHide('example');return false;"><i
                                    class="fa fa-globe"></i>English<i class="fa fa-angle-down"></i></a>
                        </p>
                        <div id="example" class="more">
                            <p><a href="#" id="example-hide" class="hideLink"
                                    onclick="showHide('example');return false;"><i
                                        class="fa fa-globe"></i>English<i class="fa fa-angle-up"></i></a>
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
                    <li><a href="#" class="">Home</a></li>
                    <li><a href="#" class="">Courses</a></li>
                    <li><a href="#" class="">Events</a></li>
                    <li><a href="#" class="">News</a></li>
                    <li><a href="#" class="">Contact</a></li>
                    <li><a href="#search"><i class="fa fa-search"></i></a></li>
                </ul>
            </nav>
        </div>
    </div>
</header>