<div id="boxed-slider">
    <div class="slider container">
        <div class="fullwidthbanner-container">
            <div class="fullwidthbanner">
                <ul>
                    @foreach ($slides->where('first', '==' , '1') as $slide)
                        <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                            <img src="{{ asset('images/' . $slide->image) }}" data-fullwidthcentering="on" alt="slide">
                            <div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                {!! $slide->title !!}</div>
                            <div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                {{ $slide->textorange }}</div>
                            <div class="tp-caption second-line lfb tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                <p>{!! $slide->text !!}</p>
                            </div>
                            <div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                <div class="slider-button"><a href="{{ $slide->btnlink }}">{{ $slide->btntext }}</a></div>
                            </div>
                        </li>
                    @endforeach
                    @foreach ($slides->where('first', '==' , '0')  as $slide)
                        <li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
                            <img src="{{ asset('images/' . $slide->image) }}" data-fullwidthcentering="on" alt="slide">
                            <div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="160" data-speed="1000" data-start="200" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                {!! $slide->title !!}</div>
                            <div class="tp-caption solution-line lft tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="225" data-speed="2000" data-start="200" data-easing="Power4.easeIn"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                {{ $slide->textorange }}</div>
                            <div class="tp-caption second-line lfb tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="310" data-speed="1000" data-start="800" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                <p>{!! $slide->text !!}</p>
                            </div>
                            <div class="tp-caption third-line lfb tp-resizeme start" data-x="left" data-hoffset="0"
                                data-y="400" data-speed="1000" data-start="800" data-easing="Power4.easeOut"
                                data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0">
                                <div class="slider-button"><a href="{{ $slide->btnlink }}">{{ $slide->btntext }}</a></div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>
