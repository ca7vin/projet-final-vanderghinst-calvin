<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

	<title>Educa - Education HTML Theme</title>


	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href="{{ asset("/css/bootstrap.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/animate.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/jquery-ui.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/simple-line-icons.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/font-awesome.min.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/icon-font.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/educa.css") }}">
	<link rel="stylesheet" href="{{ asset("/rs-plugin/css/settings.css") }}">
	<link rel="stylesheet" href="{{ asset("/css/app.css") }}">
	
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">

				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header container clearfix">
							<div class="logo">
								<a href="index.html"><img src="{{ asset("images/logo.png") }}" alt=""></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<div class="header-info hidden-sm hidden-xs">
								<ul>
									<li><i class="fa fa-phone"></i>+49 233 322 333</li>
									<li><i class="fa fa-envelope-o"></i>your@website.com</li>
									<li class="language">
									<p><a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-down"></i></a></p>
									<div id="example" class="more">
										<p><a href="#" id="example-hide" class="hideLink" 
										onclick="showHide('example');return false;"><i class="fa fa-globe"></i>English<i class="fa fa-angle-up"></i></a></p>
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
									<li><a href="#" class="has-submenu">Home</a>
										<ul class="sub-menu">
											<li><a href="index.html">Homepage 1</a></li>
											<li><a href="homepage-2.html">Homepage 2</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Courses</a>
										<ul class="sub-menu">
											<li><a href="courses-grid.html">Courses Grids</a></li>
											<li><a href="courses-list.html">Courses List</a></li>
											<li><a href="single-course.html">Single Course</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Events</a>
										<ul class="sub-menu">
											<li><a href="classic-events.html">Classic Events</a></li>
											<li><a href="calendar-events.html">Calendar Events</a></li>
											<li><a href="single-event.html">Single Event</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">Pages</a>
										<ul class="sub-menu">
											<li><a href="about.html">About Us</a></li>
											<li><a href="our-teachers.html">Our Teachers</a></li>
											<li><a href="single-teacher.html">Single Teacher</a></li>
											<li><a href="gallery-4.html">Gallery 4 Columns</a></li>
											<li><a href="gallery-3.html">Gallery 3 Columns</a></li>
										</ul>
									</li>
									<li><a href="#" class="has-submenu">News</a>
										<ul class="sub-menu">
											<li><a href="classic-news.html">Classic News</a></li>
											<li><a href="grid-news.html">Grid News</a></li>
											<li><a href="single-post.html">Single Post</a></li>
										</ul>
									</li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="#search"><i class="fa fa-search"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<div id="search">
				    <button type="button" class="close">×</button>
				    <form>
				        <input type="search" value="" placeholder="type keyword(s) here" />
				        <button type="submit" class="btn btn-primary"><span>Search</span></button>
				    </form>
				</div>

				<div class="page-heading events-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Events</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="courses-grid.html">Courses Categories</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>

				<section class="events-grid">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="pre-featured">
									<div class="info-text">
										<h4>showing 1-9 of 40 courses</h4>
									</div>
									<div class="right-content">
										<div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Select Category</option>
		                                          <option>Free</option>
		                                          <option>Timing</option>
		                                          <option>Mostly</option>
		                                          <option>Latest</option>
		                                    </select>
		                                </div>
		                                <div class="input-select">
		                                    <select name="mark" id="mark">
		                                        <option value="-1">Sorted by</option>
		                                          <option>Price</option>
		                                          <option>Useless</option>
		                                          <option>Important</option>
		                                    </select>
		                                </div>
		                                <div class="grid-list">
		                                	<ul>
		                                		<li><a href="#"><i class="fa fa-list"></i></a></li>
		                                		<li><a href="#"><i class="fa fa-th-large"></i></a></li>
		                                	</ul>
		                                </div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>The name of a great<br>band</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Building Blocks – York’s<br>Pension Plan</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Filming Objects And<br>Sculpture</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Filming Objects And<br>Projects</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Public and Patient Involvment<br>Health Research</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Balancing Economic and<br>transformation</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Suad Amiry and Susan Abulhawa<br>in corvesation</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>Flu Shots for Employees:<br>Manhattanville</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="event-item">
									<div class="thumb-holder">
										<img src="http://placehold.it/370x236" alt="">
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#"><i class="fa fa-star"></i></a></li>
												<li><a href="#">5 stars</a></li>
												<li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<ul>
											<li><i class="fa fa-map-marker"></i>Johnny Lane<br>Milwaukee WI 532</li>
											<li><i class="fa fa-clock-o"></i>Dec 18 - Dec 28<br>Monday 8am - 12am</li>
										</ul>
										<div class="date">
											<p>18<span>Dec</span></p>
										</div>
										<a href="single-teacher.html"><h4>The Healthy Dancer Balance<br>On &amp; Off stage</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson fap tattooed.</p>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="pagination-navigation">
									<div class="row">
										<div class="col-md-6 col-xs-6">
											<div class="pagination">
												<ul>
													<li><a href="#">1</a></li>
													<li class="active"><a href="#">2</a></li>
													<li><a href="#">3</a></li>
													<li><a href="#">4</a></li>
												</ul>
											</div>
										</div>
										<div class="col-md-6 col-xs-6">
											<div class="navigation">
												<ul>
													<li><a href="#"><i class="fa fa-arrow-left"></i></a></li>
													<li><a href="#"><i class="fa fa-arrow-right"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<div id="call-to-action">
					<div class="container">
						<div class="row">
							<p>Young people have been 'mis-sold' <em>path to success</em>, business leaders warn.</p>
							<div class="accent-button">
								<a href="courses-list.html">View Courses</a>
							</div>
						</div>
					</div>
				</div>

				<footer>
					<div class="container">
						<div class="row">
							<div class="col-md-3">
								<div class="footer-widget">
									<div class="educa-info">
										<img src="{{ asset("images/logo-2.png") }}" alt="">
										<div class="line-dec"></div>
										<p>Viral megings photo booth farm tab McSweeney's Thundercats til typewrite PBR food truck Kickstarter mumb ennui Tumblr. Jean shorts hoodiele.</p>
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
											<li><i class="fa fa-home"></i>1107 Wood Street Saginaw, MI New York 48607</li>
											<li><i class="fa fa-phone"></i>+12 (34) 214 280 2000</li>
											<li><i class="fa fa-envelope-o"></i>support@educa.com</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3">
								<div class="footer-widget">
									<div class="newsletters">
										<h2>Newsletters</h2>
										<div class="line-dec"></div>
										<p>Subsrcibe to our newsletter for latest updates about our site for universe.</p>
										<input type="text" class="email" name="s" placeholder="Email Address..." value="">
										<div class="accent-button">
											<a href="#">Subscribe</a>
										</div>
									</div>
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
													<li><a href="#">Home</a></li>
													<li><a href="#">Courses</a></li>
													<li><a href="#">Future Students</a></li>
													<li><a href="#">News</a></li>
													<li><a href="#">Pages</a></li>
													<li><a href="#">Contact</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</footer>
			

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li class="menu-item-has-children"><a href="#">Home</a>
								<ul class="sub-menu">
									<li><a href="index.html">Homepage 1</a></li>
									<li><a href="homepage-2.html">Homepage 2</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Courses</a>
								<ul class="sub-menu">
									<li><a href="courses-grid.html">Courses Grids</a></li>
									<li><a href="courses-list.html">Courses List</a></li>
									<li><a href="single-course.html">Single Course</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Events</a>
								<ul class="sub-menu">
									<li><a href="classic-events.html">Classic Events</a></li>
									<li><a href="calendar-events.html">Calendar Events</a></li>
									<li><a href="single-event.html">Single Event</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">Pages</a>
								<ul class="sub-menu">
									<li><a href="about.html">About Us</a></li>
									<li><a href="our-teachers.html">Our Teachers</a></li>
									<li><a href="single-teacher.html">Single Teacher</a></li>
									<li><a href="gallery-4.html">Gallery 4 Columns</a></li>
									<li><a href="gallery-3.html">Gallery 3 Columns</a></li>
								</ul>
							</li>
							<li class="menu-item-has-children"><a href="#">News</a>
								<ul class="sub-menu">
									<li><a href="classic-news.html">Classic News</a></li>
									<li><a href="grid-news.html">Grid News</a></li>
									<li><a href="single-post.html">Single Post</a></li>
								</ul>
							</li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="{{ asset("js/jquery-1.11.1.min.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/bootstrap.min.js") }}"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="{{ asset("rs-plugin/js/jquery.themepunch.tools.min.js") }}"></script>
    <script src="{{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js") }}"></script>

	<script type="text/javascript" src="{{ asset("js/plugins.js") }}"></script>
	<script type="text/javascript" src="{{ asset("js/custom.js") }}"></script>

</body>
</html>