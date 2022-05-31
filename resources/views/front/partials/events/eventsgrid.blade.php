<section class="events-grid">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pre-featured">
                    <div class="info-text">
                        <h4>showing {{ $events->firstItem() }}-{{ $events->lastItem() }} of {{ $events->total() }} events</h4>
                    </div>
                    <div class="right-content">
                        <div class="input-select">
                            <form action="{{ Route('filterCatEvent') }}" id="formFilterCat" method="POST">
                                @csrf
                                <select name="category" id="category" onchange="document.getElementById('formFilterCat').submit()">
                                    <option value="-1">Select Category</option>
                                    @foreach ($categories as $categorie)
                                        <option value="{{ $categorie->id }}"><a href="{{ Route('filterCatEvent', $categorie->id) }}">{{ $categorie->name }}</a></option>
                                    @endforeach
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($events as $event)
                <div class="col-md-4">
                    <div class="event-item">
                        <div class="thumb-holder">
                            <img src="{{ asset('images/' . $event->image1) }}" alt="">
                            <div class="hover-content">
                                <ul>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                    <li><a href="#">5 stars</a></li>
                                    <li><a href="#"><i class="fa fa-thumbs-up"></i>68</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="down-content">
                            <ul>
                                <li><i class="fa fa-map-marker"></i>{{ $event->location }}</li>
                                <li><i class="fa fa-clock-o"></i>{{ $event->start_time }} - {{ $event->end_time }}</li>
                            </ul>
                            <div class="date">
                                <p>{!! $event->date !!}</p>
                            </div>
                            <a href="{{ Route('event.onepage', $event->id) }}">
                                <h4>{{ $event->title }}</h4>
                            </a>
                            <p>{{ Illuminate\Support\Str::limit($event->description, 100) }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-12">
                {{ $events->links('vendor.pagination.custom') }}
            </div>
        </div>
    </div>
</section>
