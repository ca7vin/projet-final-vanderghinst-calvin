@if ($paginator->hasPages())
    <div class="pagination-navigation">
        <div class="row">
            <div class="col-md-6 col-xs-6">
                <div class="pagination">
                    <ul>
                        @if ($paginator->onFirstPage())
                            <li class="disabled"></span></li>
                        @else
                            <li><a href="{{ $paginator->previousPageUrl() }}" rel="prev"><i
                                        class="fa fa-arrow-left"></i></a></li>
                        @endif
                        @foreach ($elements as $element)
                            @if (is_string($element))
                                <li class="disabled"><span>{{ $element }}</span></li>
                            @endif
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    @if ($page == $paginator->currentPage())
                                        <li class="active"><a href="{{ $url }}">{{ $page }}</a>
                                        </li>
                                    @else
                                        <li><a href="{{ $url }}">{{ $page }}</a></li>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        @if ($paginator->hasMorePages())
                            <li><a href="{{ $paginator->nextPageUrl() }}" rel="next"><i
                                        class="fa fa-arrow-right"></i></a></li>
                        @else
                            <li class="disabled"></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endif
