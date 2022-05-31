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
                                    {!! $service->icon !!}
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
                                <form action="{{ Route('demande.store') }}" method='POST'>
                                    @csrf
                                    <div class="search-form">
                                        @if (session()->has('message'))
                                            <div class='alert alert-success'
                                                style='display:flex !important; align-items:center !important; justify-content:center !important;'>
                                                {{ session()->get('message') }}
                                            </div>
                                        @endif
                                        @if (session()->has('error'))
                                            <div class='alert alert-danger'
                                                style='display:flex !important; align-items:center !important; justify-content:center !important;'>
                                                {{ session()->get('error') }}
                                            </div>
                                        @endif
                                        <input type="text" name="from" placeholder="Full Name"
                                            value="{{ Auth::user()->name }}">
                                        <input type="text" id="address" name="" placeholder="E-mail Address"
                                            value="{{ Auth::user()->email }}">
                                        <div class="select">
                                            <select name="content" id="about">
                                                <option value="-1">Categories</option>
                                                @foreach ($categories as $categorie)
                                                    <option value="{{ $categorie->name }}">{{ $categorie->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="select">
                                            <select name="to" id="to">
                                                <option value="-1">Courses</option>
                                                @foreach ($courses as $course)
                                                    @if ($course->prof)
                                                    <option value="{{ $course->prof->user->name }}">{{ $course->title }}
                                                    </option>
                                                    @else
                                                    <option value="Administrateur">{{ $course->title }}
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="accent-button">
                                            <button type="submit" style='border: none !important; margin-top: 20px !important;'>Submit Request</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @else
                        @if (Route::has('login'))
                            <div class="col-md-4">
                                <div class="request-information">
                                    <div class="search-form">
                                        <div class="accent-button">
                                            <a href="{{ Route('login') }}">Log in</a>
                                        </div>
                                        <div class="accent-button" style='margin-top:20px !important;'>
                                            <a href="{{ Route('register') }}">Sign in</a>
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
