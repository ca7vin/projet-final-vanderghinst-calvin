<section class="courses-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pre-featured">
                    <div class="info-text">
                        <h4>showing {{$courses->firstItem()}}-{{$courses->lastItem()}} of 40 courses</h4>
                    </div>
                    <div class="right-content">
                        <div class="input-select">
                            <select name="category" id="category">
                                <option value="-1">Select Category</option>
                                <option>Free</option>
                                <option>Timing</option>
                                <option>Mostly</option>
                                <option>Latest</option>
                            </select>
                        </div>
                        <div class="input-select">
                            <select name="sorted" id="sorted">
                                <option value="-1">Sorted by</option>
                                <option>Price</option>
                                <option>Useless</option>
                                <option>Important</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($courses as $course)
                <div class="col-md-4">
                    <div class="item course-item">
                        <a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
                        <div class="down-content">
                            <img src="{{ asset('images/' . $course->prof->user->image) }}" alt="">
                            <h6>{{ $course->prof->user->name }}</h6>
                            <div class="{{ $course->price_color }}">
                                <span>{{ $course->price }}</span>
                                <div class="base"></div>
                            </div>
                            <a href="single-course.html">
                                <h4>{{ $course->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($course->description, 100) }}</p>
                            <div class="text-button">
                                <a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $courses->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</section>
