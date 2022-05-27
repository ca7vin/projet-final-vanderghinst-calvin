@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Events</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form enctype="multipart/form-data" class='w-100 p-3 my-5 rounded' action='{{ route('event.store') }}'
                method='post' style='background-color:#A12C2F'>
                @csrf
                <div class="row">
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>title</label>
                            <input type='text' name='title'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>start time</label>
                            <input type='text' name='start_time'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>end time</label>
                            <input type='text' name='end_time'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>date</label>
                            <input type='date' name='date' style='width:227.6px;'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>location</label>
                            <input type='text' name='location'>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>description</label>
                            <textarea rows="10" type='text' name='description' style='width:227.6px;'></textarea>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>phone</label>
                            <input type='text' name='phone'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class="text-uppercase text-white mb-2" for=''>email</label>
                            <input type='text' name='email'>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-start justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>image1</label>
                            <input type="file" name='image1' class="text-white">
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>image2</label>
                            <input type="file" name='image2' class="text-white">
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>image3</label>
                            <input type="file" name='image3' class="text-white">
                        </div>
                        <label class='text-uppercase text-white mb-2' for=''>categories</label>
                        @foreach ($categories as $categorie)
                            <div class='form-check'>
                                <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                                    value='{{ $categorie->id }}'>
                                <label class="text-white" for='checkbox{{ $categorie->id }}'>{{ $categorie->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row mx-5">
                    <button class='btn btn-dark mt-3 mb-2' type='submit'>Create</button> {{-- create_blade_anchor --}}
                </div>
            </form>
        </div>
    </section>
@endsection
