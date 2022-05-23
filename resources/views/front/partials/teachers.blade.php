<section class="our-teachers">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center">
                <h1>Our Teachers</h1>
                <img src={{ asset('images/line-dec.png') }} alt="">
                <p>High Life squid literally scenester fap Helvetica quinoa church-key</p>
            </div>
        </div>
        <div class="row">
            @foreach ($popularteachers as $popularteacher)
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        {{-- {{ dd($popularteacher) }} --}}
                        <a href="single-teacher.html"><img src="{{ asset("images/" . $popularteacher->user->image) }}" alt=""></a>
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
                        <a href="{{ Route('prof.onepage', $popularteacher->id) }}">
                            <h4>{{ $popularteacher->user->name }}</h4>
                        </a>
                        <span>{{ $popularteacher->subject }}</span>
                        <p>{{ $popularteacher->bio_short }}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>