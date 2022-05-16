@extends('front/layouts/app')
@section('content')
    <div class="sidebar-menu-container" id="sidebar-menu-container">
        <div class="sidebar-menu-push">
            <div class="sidebar-menu-overlay"></div>
            <div class="sidebar-menu-inner">
				@include('front/partials/header')
				{{-- @include('front/partials/search') --}}
				<div class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<h1>All Courses</h1>
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
				@include('front/partials/courses/coursesgrid')
				@include('front/partials/calltoaction')
				@include('front/partials/footer')
				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>
			</div>
		</div>
		@include('front/partials/sidebar')
	</div>
@endsection