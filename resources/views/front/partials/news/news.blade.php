<section class="classic-news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="classic-posts">
                    @foreach ($news as $new)
                        <div class="classic-item">
                            <a href="single-post.html"><img src="http://placehold.it/770x410" alt=""></a>
                            <ul>
                                <li>Posted : <em>{{ $new->created_at->translatedFormat('d F Y') }}</em> </li>
                                <li>By <em>{{ $new->redacteur->user->name }}</em></li>
                                <li>Comments: <em>2</em></li>
                            </ul>
                            <a href="single-post.html">
                                <h4>{{ $new->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($new->text, 250) }}</p>
                            <div class="buttons">
                                <div class="accent-button">
                                    <a href="single-post.html">Continue Reading</a>
                                </div>
                                <div class="second-button">
                                    <a href="#">Share <i class="fa fa-share-alt"></i></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    <div class="pagination-navigation">
                        <div class="row">
                            {{ $news->links('vendor.pagination.custom') }}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="side-bar">
                    <div class="search-box">
                        <input type="text" class="search" name="s" placeholder="Search..." value="">
                    </div>
                    <div class="categories">
                        <div class="widget-heading">
                            <h4>Categories</h4>
                        </div>
                        <ul>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>International</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Learning</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Read</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Education</a></li>
                            <li><a href="#"><i class="fa fa-angle-right"></i>Finance</a></li>
                        </ul>
                    </div>
                    <div class="recent-news">
                        <div class="widget-heading">
                            <h4>Recent News</h4>
                        </div>
                        <ul>
                            <li>
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html">
                                    <h6>Visiting Artists: Giles Bailey</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html">
                                    <h6>How Students use Rankings?</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                            <li>
                                <a href="single-post.html"><img src="http://placehold.it/70x70" alt=""></a>
                                <a href="single-post.html">
                                    <h6>University Finder: Compare</h6>
                                </a>
                                <span>7 October 2015</span>
                            </li>
                        </ul>
                    </div>
                    <div class="tags">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <ul>
                            <li><a href="#">Photography</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Envanto</a></li>
                            <li><a href="#">Course</a></li>
                            <li><a href="#">Education</a></li>
                            <li><a href="#">College</a></li>
                            <li><a href="#">Teachers</a></li>
                            <li><a href="#">Read</a></li>
                            <li><a href="#">Excursions</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
