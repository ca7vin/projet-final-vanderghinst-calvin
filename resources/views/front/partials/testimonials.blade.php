<section class="testimonials-news">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-heading">
                    <h1>What Our Students Say</h1>
                    <img src={{ asset('images/line-dec.png') }} alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div id="owl-testimonials">
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice
                                    authentic Truffaut put a bird on it, pug ethical tousled photo booth
                                    gluten-free cliche bicycle rights four dollar toast single-origin coffee
                                    taxidermy.</p>
                                <img src="{{ asset('images/default.jpg') }}" alt="">
                                <h4>Caroll m. davis</h4>
                                <span>Web Designer</span>
                            </div>
                            <div class="item">
                                <i class="fa fa-quote-right"></i>
                                <p>Stumptown polaroid skateboard single-origin coffee. Farm-to-table Vice
                                    authentic Truffaut put a bird on it, pug ethical tousled photo booth
                                    gluten-free cliche bicycle rights four dollar toast single-origin coffee
                                    taxidermy.</p>
                                <img src="{{ asset('images/default.jpg') }}" alt="">
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
                    <img src={{ asset('images/line-dec.png') }} alt="">
                </div>
                <div class="row">
                    <div class="col-md-12">
                        @foreach ($lastnews->where('status', "==", true) as $lastnew)
                            <div class="news-item">
                                <a href="{{ Route('post.onepage', $lastnew->id) }}"><img width='175px' height="130px" src="{{ asset('images/' . $lastnew->image) }}" alt=""></a>
                                <ul>
                                    <li>Posted : <em>{{ $lastnew->created_at->translatedFormat('d F Y') }}</em> </li>
                                    @if ($lastnew->prof)
                                        <li>By : <em>{{ $lastnew->prof->user->name }}</em></li>
                                    @else
                                        <li>By : <em>Admin</em></li>
                                    @endif
                                    <li>2 Comments</li>
                                </ul>
                                <a href="{{ Route('post.onepage', $lastnew->id) }}">
                                    <h4>{{ $lastnew->title }}</h4>
                                </a>
                                <p>{{ Illuminate\Support\Str::limit($lastnew->text, 100) }}
                                </p>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
