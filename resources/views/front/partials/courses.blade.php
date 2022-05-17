<section class="popular-courses">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Popular Courses</h1>
                <img src={{ asset('images/line-dec.png') }} alt="">
                <p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
            </div>
        </div>
        <div class="row">
            <div id="owl-courses">
                @foreach ($popularcourses as $popularcourse)
                    <div class="item course-item">
                        <a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
                        <div class="down-content">
                            <img src="http://placehold.it/44x44" alt="">
                            <h6>{{ $popularcourse->prof }}</h6>
                            <div class="{{ $popularcourse->price_color }}">
                                <span>{{ $popularcourse->price }}</span>
                                <div class="base"></div>
                            </div>
                            <a href="single-course.html">
                                <h4>{{ $popularcourse->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($popularcourse->description, 100) }}</p>
                            <div class="text-button">
                                <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
