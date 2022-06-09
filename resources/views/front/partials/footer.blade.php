<footer>
    @if (session()->has('success'))
        <div class='alert alert-success' style='display:flex !important; align-items:center !important; justify-content:center !important;'>
            {{ session()->get('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class='alert alert-danger' style='display:flex !important; align-items:center !important; justify-content:center !important;'>
            {{ session()->get('error') }}
        </div>
    @endif

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="educa-info">
                        <img src={{ asset('images/logo-2.png') }} alt="">
                        <div class="line-dec"></div>
                        <p>Viral megings photo booth farm tab McSweeney's Thundercats til typewrite PBR food
                            truck Kickstarter mumb ennui Tumblr. Jean shorts hoodiele.</p>
                        <div class="text-button">
                            <a href="#">Read More <i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="featured-links">
                        <h2>Featured Links</h2>
                        <div class="line-dec"></div>
                        <ul>
                            <li><a href="#">Graduation</a></li>
                            <li><a href="#">Admissions</a></li>
                            <li><a href="#">International</a></li>
                            <li><a href="#">FAQs</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Courses</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Bookstore</a></li>
                            <li><a href="#">Alumni</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <div class="university-address">
                        <h2>University Address</h2>
                        <div class="line-dec"></div>
                        <ul>
                            <li><i class="fa fa-home"></i>1107 Wood Street Saginaw, MI New York 48607
                            </li>
                            <li><i class="fa fa-phone"></i>+12 (34) 214 280 2000</li>
                            <li><i class="fa fa-envelope-o"></i>support@educa.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="footer-widget">
                    <form action="{{ Route('contact-form.store') }}" method='POST'>
                        @csrf
                        <div class="newsletters">
                            <h2>Newsletters</h2>
                            <div class="line-dec"></div>
                            <p>Subsrcibe to our newsletter for latest updates about our site for universe.</p>
                            <input type="text" class="email" name="email" placeholder="Email Address..."
                                value="">
                            <div class="accent-button">
                                <button action='submit'>Subscribe</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="copyright-menu">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="copyright-text">
                                <p>@ Copyright 2015 Educa. All Rights Reserved</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="menu">
                                <ul>
                                    <li><a href="{{ Route('home') }}">Home</a></li>
                                    <li><a href="{{ Route('coursesMain') }}">Courses</a></li>
                                    <li><a href="{{ Route('eventsMain') }}">Events</a></li>
                                    <li><a href="{{ Route('newsMain') }}">News</a></li>
                                    <li><a href="{{ Route('contact') }}">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
