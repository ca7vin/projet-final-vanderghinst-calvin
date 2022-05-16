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

	

	<link rel="stylesheet" href={{ asset("css/bootstrap.css")}}>
	<link rel="stylesheet" href={{ asset("css/animate.css")}}>
	<link rel="stylesheet" href={{ asset("css/jquery-ui.css")}}>
	<link rel="stylesheet" href={{ asset("css/simple-line-icons.css")}}>
	<link rel="stylesheet" href={{ asset("css/font-awesome.min.css")}}>
	<link rel="stylesheet" href={{ asset("css/icon-font.css")}}>
	<link rel="stylesheet" href={{ asset("css/educa.css")}}>

	<link rel="stylesheet" href={{ asset("rs-plugin/css/settings.css")}}>

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
								<a href="index.html"><img src={{ asset("images/logo.png")}} alt=""></a>
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
				
				<div id="boxed-slider">
					<div class="slider container">
						<div class="fullwidthbanner-container">
							<div class="fullwidthbanner">
								<ul>
									<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
										<img src="http://placehold.it/1170x580" data-fullwidthcentering="on" alt="slide">
										<div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Are you ready to study ?<br>We have the</div>
										<div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Solution</div>
										<div class="tp-caption second-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><p>Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.</p></div>
										<div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slider-button"><a href="#">Buy now</a></div>
										</div>
									</li>
									<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
										<img src="http://placehold.it/1170x580" data-fullwidthcentering="on" alt="slide">
										<div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Next year more intresting!<br>Check next</div>
										<div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">Features</div>
										<div class="tp-caption second-line description-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><p>Nunc eget tempor neque. Aenean non ex sed nibh euismod<br>ornare. Nam congue nisi purus, sed luctus risus.</p></div>
										<div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0" data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slider-button"><a href="#">Buy now</a></div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<section>
					<div class="welcome-intro">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="section-heading">
										<h1>Welcome to Educa</h1>
										<span>Twee Vice synth stumptown</span>
										<img src={{ asset("images/line-dec.png")}} alt="">
										<p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
									</div>
									<div class="row">
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="fa fa-graduation-cap"></i>
												<h4>Graduated Steps</h4>
												<div class="line-dec"></div>
												<p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="fa fa-globe"></i>
												<h4>Global Interested</h4>
												<div class="line-dec"></div>
												<p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item">
												<i class="fa fa-clock-o"></i>
												<h4>Circular Clock</h4>
												<div class="line-dec"></div>
												<p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
											</div>
										</div>
										<div class="col-md-6 col-sm-6">
											<div class="service-item last-service">
												<i class="fa fa-book"></i>
												<h4>Open Book</h4>
												<div class="line-dec"></div>
												<p>Photo booth Banksy YOLO mixtape post-ironic they sold out all.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-4">
									<div class="request-information">
										<div class="widget-heading">
											<h4>Request Information</h4>
										</div>
										<div class="search-form">
											<input type="text" id="name" name="s" placeholder="Full Name" value="">
											<input type="text" id="address" name="s" placeholder="E-mail Address" value="">
			                                <div class="select">
			                                    <select name="mark" id="campus">
			                                        <option value="-1">Campus of Interests</option>
			                                          <option>Nearby</option>
			                                          <option>High Classes</option>
			                                          <option>Short Time</option>
			                                          <option>Long Time</option>
			                                    </select>
			                                </div>
			                                <div class="select">
			                                    <select name="mark" id="program">
			                                        <option value="-1">Program of Interests</option>
			                                          <option>Wroking Process</option>
			                                          <option>Archivements</option>
			                                          <option>Social</option>
			                                          <option>Profits</option>
			                                    </select>
			                                </div>
			                                <div class="accent-button">
			                                	<a href="#">Submit Request</a>
			                                </div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="popular-courses">
					<div class="container">
						<div class="row">
							<div class="section-heading text-center">
								<h1>Popular Courses</h1>
								<img src={{ asset("images/line-dec.png")}} alt="">
								<p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
							</div>
						</div>
						<div class="row">
							<div id="owl-courses">
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$19.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$49.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>Electrical &amp; Electronic <br>Engingering</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$19.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-yellow">
											<span>Free</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>What can you do<br>With a Business Degree?</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$29.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>Fashion buying<br>and Product Management</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$19.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-yellow">
											<span>Free</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>How to become<br>a Powerful Speaker</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-yellow">
											<span>Free</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>What can you do<br>With a Business Degree?</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6>Ernest Byrd</h6>
										<div class="price-red">
											<span>$29.99</span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><h4>Fashion buying<br>and Product Management</h4></a>
										<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic Wes Anderson.</p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="testimonials-news">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<div class="section-heading">
									<h1>What Our Students Say</h1>
									<img src={{ asset("images/line-dec.png")}} alt="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<div id="owl-testimonials">
											<div class="item">
												<i class="fa fa-quote-right"></i>
												<p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
												<img src="http://placehold.it/66x66" alt="">
												<h4>Caroll m. davis</h4>
												<span>Web Designer</span>
											</div>
											<div class="item">
												<i class="fa fa-quote-right"></i>
												<p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice authentic Truffaut put a bird on it, pug ethical tousled photo booth gluten-free cliche bicycle rights four dollar toast single-origin coffee taxidermy.</p>
												<img src="http://placehold.it/66x66" alt="">
												<h4>Peter j. smith</h4>
												<span>Web Designer</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="section-heading university-news">
									<h1>University News</h1>
									<img src={{ asset("images/line-dec.png")}} alt="">
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="news-item">
											<a href="single-post.html"><img src="http://placehold.it/175x130" alt=""></a>
											<ul>
												<li>7 Oct 2015</li>
												<li>By Admin</li>
												<li>2 Comments</li>
											</ul>
											<a href="single-post.html"><h4>New University Finder: Compare</h4></a>
											<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic.</p>
										</div>
										<div class="news-item">
											<a href="single-post.html"><img src="http://placehold.it/175x130" alt=""></a>
											<ul>
												<li>7 Oct 2015</li>
												<li>By Admin</li>
												<li>2 Comments</li>
											</ul>
											<a href="single-post.html"><h4>How Do Students Use Rankings?</h4></a>
											<p>Ugh chambray lumbersexual food truc artisan meditation sartorial post-ironic.</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="read-books">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-heading text-center">
									<h1>You Can Read Books</h1>
									<img src={{ asset("images/line-dec.png")}} alt="">
									<p>Plaid you probably haven't heard of them fashion axe meditation</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="books-item">
									<i class="fa fa-area-chart"></i>
									<h4>structure<br>entry requirements</h4>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="books-item">
									<i class="fa fa-briefcase"></i>
									<h4>Education<br>graphic interior</h4>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="books-item">
									<i class="fa fa-compass"></i>
									<h4>Preparing<br>the compass Exam</h4>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="books-item">
									<i class="fa fa-comments-o"></i>
									<h4>Teacher<br>talking to a group</h4>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="border-button">
									<a href="#">Go to the books</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="our-teachers">
					<div class="container">
						<div class="row">
							<div class="section-heading text-center">
								<h1>Our Teachers</h1>
								<img src={{ asset("images/line-dec.png")}} alt="">
								<p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
							</div>
						</div>
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="single-teacher.html"><img src="http://placehold.it/270x180" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="single-teacher.html"><h4>Nick Smith</h4></a>
										<span>Physic Teacher</span>
										<p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="single-teacher.html"><img src="http://placehold.it/270x180" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="single-teacher.html"><h4>John Rosado</h4></a>
										<span>Emglish Teacher</span>
										<p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="single-teacher.html"><img src="http://placehold.it/270x180" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="single-teacher.html"><h4>Maria Lehmann</h4></a>
										<span>Design Teacher</span>
										<p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="teacher-item">
									<div class="thumb-holder">
										<a href="single-teacher.html"><img src="http://placehold.it/270x180" alt=""></a>
										<div class="hover-content">
											<ul>
												<li><a href="#"><i class="fa fa-facebook"></i></a></li>
												<li><a href="#"><i class="fa fa-twitter"></i></a></li>
												<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
												<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
											</ul>
										</div>
									</div>
									<div class="down-content">
										<a href="single-teacher.html"><h4>Samuel Delossantos</h4></a>
										<span>Math Teacher</span>
										<p>Ugh chambray lumbersexual food  artisan meditation sartorial well post-ironic wes</p>
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
										<img src={{ asset("images/logo-2.png")}} alt="">
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


	

	<script type="text/javascript" src={{ asset("js/jquery-1.11.1.min.js")}}></script>
	<script type="text/javascript" src={{ asset("js/bootstrap.min.js")}}></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src={{ asset("rs-plugin/js/jquery.themepunch.tools.min.js")}}></script>
    <script src={{ asset("rs-plugin/js/jquery.themepunch.revolution.min.js")}}></script>

	<script type="text/javascript" src={{ asset("js/plugins.js")}}></script>
	<script type="text/javascript" src={{ asset("js/custom.js")}}></script>

</body>
</html>