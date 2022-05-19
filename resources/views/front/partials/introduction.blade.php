<section>
    <div class="welcome-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-heading">
                        <h1>Welcome to Educa</h1>
                        <span>Twee Vice synth stumptown</span>
                        <img src={{ asset('images/line-dec.png') }} alt="">
                        <p>Twee Vice synth stumptown, distillery aesthetic slow-carb Intelligentsia bitters
                            taxidermy<br>McSweeney's, flexitarian actually iPhone mlkshk brunch.</p>
                    </div>
                    <div class="row">
                        @foreach ($services as $service)
                        <div class="col-md-6 col-sm-6">
                            <div class="service-item">
                                {!! $service->icon->icon !!}
                                <h4>{{ $service->title }}</h4>
                                <div class="line-dec"></div>
                                <p>{{ $service->text }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                {{-- FORM START --}}
                @if (Route::has('login'))
                    @auth
                        <div class="col-md-4">
                            <div class="request-information">
                                <div class="widget-heading">
                                    <h4>Request Information</h4>
                                </div>
                                <div class="search-form">
                                    <input type="text" id="name" name="s" placeholder="Full Name" value="{{ Auth::user()->name }}">
                                    <input type="text" id="address" name="s" placeholder="E-mail Address" value="{{ Auth::user()->email }}">
                                    <div class="select">
                                        <select name="mark" id="campus">
                                            <option value="-1">Campus of Interests</option>
                                            <option>Nearby</option>
                                            <option>High Classes</option>
                                            <option>Short Time</option>
                                            <option>Long Time</option>
                                        </select>
                                    </div>
                                    <div class="select">
                                        <select name="mark" id="program">
                                            <option value="-1">Program of Interests</option>
                                            <option>Wroking Process</option>
                                            <option>Archivements</option>
                                            <option>Social</option>
                                            <option>Profits</option>
                                        </select>
                                    </div>
                                    <div class="accent-button">
                                        <a href="#">Submit Request</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @else
                        @if (Route::has('login'))
                            <div class="col-md-4">
                                <div class="request-information">
                                    <div class="search-form">
                                        <div class="accent-button">
                                            <a href="{{ Route("login") }}">Log in</a>
                                        </div>
                                        <div class="accent-button" style='margin-top:20px !important;'>
                                            <a href="{{ Route("register") }}">Sign in</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endauth
                @endif




            </div>
        </div>
    </div>
</section>
