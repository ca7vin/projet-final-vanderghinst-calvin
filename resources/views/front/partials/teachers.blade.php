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
            @foreach ($popularteachers->where("id", '!=', 1)->where("id", '!=', 2)->random(1) as $popularteacher)
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="{{ Route('prof.onepage', $popularteacher->id) }}"><img style='object-fit:cover !important; height: 262.5px !important;' src="{{ asset("images/" . $popularteacher->user->image) }}" alt=""></a>
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
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img  style='object-fit:cover !important; height: 262.5px !important;'  src="{{ asset("images/" . $popularteachers[0]->user->image) }}" alt=""></a>
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
                        <a href="{{ Route('prof.onepage', $popularteachers[0]->id) }}">
                            <h4>{{ $popularteachers[0]->user->name }}</h4>
                        </a>
                        <span>{{ $popularteachers[0]->subject }}</span>
                        <p>{{ $popularteachers[0]->bio_short }}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img style='object-fit:cover !important; height: 262.5px !important;'   src="{{ asset("images/" . $popularteachers[1]->user->image) }}" alt=""></a>
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
                        <a href="{{ Route('prof.onepage', $popularteachers[1]->id) }}">
                            <h4>{{ $popularteachers[1]->user->name }}</h4>
                        </a>
                        <span>{{ $popularteachers[1]->subject }}</span>
                        <p>{{ $popularteachers[1]->bio_short }}</p>
                    </div>
                </div>
            </div>
            @foreach ($popularteachers->where("id", '!=', 1)->where("id", '!=', 2)->random(1) as $popularteacher)
            <div class="col-md-3 col-sm-6">
                <div class="teacher-item">
                    <div class="thumb-holder">
                        <a href="single-teacher.html"><img style='object-fit:cover !important; height: 262.5px !important;'  src="{{ asset("images/" . $popularteacher->user->image) }}" alt=""></a>
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