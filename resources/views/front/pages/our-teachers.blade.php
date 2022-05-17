@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
				@include('front/partials/header')
				<div class="page-heading teachers-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>Our Teachers</h1>
								<span>Salvia next level crucifix pickled heirloom synth</span>
								<div class="page-list">
									<ul>
										<li class="active"><a href="index.html">Home</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="#">Pages</a></li>
										<li><i class="fa fa-angle-right"></i></li>
										<li><a href="our-teachers.html">Our Teachers</a></li>
									</ul>
								</div>
							</div>	
						</div>
					</div>
				</div>
				@include('front/partials/teachers/teachers')
				@include('front/partials/calltoaction')
				@include('front/partials/footer')
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		@include('front/partials/sidebar')
	</div>
@endsection