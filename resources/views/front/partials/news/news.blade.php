<section class="classic-news">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="classic-posts">
                    @foreach ($news as $new)
                        <div class="classic-item">
                            <a href="{{ Route('post.onepage', $new->id) }}"><img height='410px' width='770px'
                                    src="{{ asset('images/' . $new->image) }}" alt=""></a>
                            <ul>
                                <li>Posted : <em>{{ $new->created_at->translatedFormat('d F Y') }}</em> </li>
                                <li>By <em>
                                        @if ($new->redacteur)
                                            {{ $new->redacteur->user->name }}
                                        @else
                                            Administrateur
                                        @endif
                                    </em></li>
                                <li>Comments: <em>2</em></li>
                            </ul>
                            <a href="{{ Route('post.onepage', $new->id) }}">
                                <h4>{{ $new->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($new->text, 250) }}</p>
                            <div class="buttons">
                                <div class="accent-button">
                                    <a href="{{ Route('post.onepage', $new->id) }}">Continue Reading</a>
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
                            @foreach ($categories as $categorie)
                            <form action="{{ Route('filterCatPost') }}" method="POST">
                                @csrf
                                    <input name='category' type="text" class="hidden" value={{ $categorie->id }}>
                                    <li><button class='btn' style='background-color:transparent !important;'><i class="fa fa-angle-right"></i>{{ $categorie->name }}</button></li>
                                </form>
                            @endforeach
                        </ul>
                    </div>
                    <div class="tags">
                        <div class="widget-heading">
                            <h4>Tags</h4>
                        </div>
                        <ul class='list-group'>
                            @foreach ($tags as $tag)
                            <form action="{{ Route('filterTagPost') }}" method="POST">
                                @csrf
                                    <input name='category' type="text" class="hidden" value={{ $tag->id }}>
                                    <li><button class='btn' style='background-color:#F5A425 !important;'><i class="fa fa-angle-right"></i>{{ $tag->name }}</button></li>
                                </form>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
