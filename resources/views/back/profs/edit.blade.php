@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='w-100 p-3 mt-5 rounded' style='background-color:#A12C2F'
                action='{{ route('prof.update', $prof->id) }}' method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                            <label class="text-uppercase text-white mb-2" for=''>subject</label>
                            <input type='text' name='subject' value="{{ $prof->subject }}">
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                            <label class="text-uppercase text-white mb-2" for=''>phone</label>
                            <input style='width:227.6px;' type='phone' name='phone' value="{{ $prof->phone }}">
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                            <label class="text-uppercase text-white mb-2" for=''>skype</label>
                            <input type='text' name='skype' value="{{ $prof->skype }}">
                        </div>
                        <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                            <label class="text-uppercase text-white mb-2" for=''>bio_short</label>
                            <textarea style='width:227.6px;' class='form-control' cols="25" rows="8" type='text' name='bio_short'>{{ $prof->bio_short }}</textarea>
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                            <label class="text-uppercase text-white mb-2" for=''>bio_long</label>
                            <textarea style='width:227.6px;' class='form-control' cols="25" rows="10" type='text' name='bio_long'>{{ $prof->bio_long }}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <button class="btn btn-dark mt-3 mb-2" type='submit'>Update</button> {{-- create_blade_anchor --}}
                </div>
            </form>

        </div>
    </section>
@endsection
