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
                        <a href="{{ Route('course.onepage', $popularcourse->id) }}"><img src="{{ asset('images/' . $popularcourse->image) }}" alt=""></a>
                        <div class="down-content">
                            <img src="{{ asset('images/' . $popularcourse->prof->user->image) }}" alt="">
                            <h6>{{ $popularcourse->prof->user->name }}</h6>
                            <div class="{{ $popularcourse->price_color }}">
                                <span>{{ $popularcourse->price }}</span>
                                <div class="base"></div>
                            </div>
                            <a href="{{ Route('course.onepage', $popularcourse->id) }}">
                                <h4>{{ $popularcourse->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($popularcourse->description, 100) }}</p>
                            <div class="text-button">
                                <a href="{{ Route('course.onepage', $popularcourse->id) }}">view more<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
