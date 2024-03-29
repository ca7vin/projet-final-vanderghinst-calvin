@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Courses</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form enctype="multipart/form-data" class='w-100 p-3 mt-5 rounded'
                action='{{ route('courses.store') }}' method='post' style='background-color:#A12C2F'>
                @csrf
                @method('POST')
                <div class="row mx-5 p-2 rounded mb-3" style='background-color:#741f21'>
                    <label class='text-uppercase text-white mb-2 text-center' for=''>Favori ?</label>
                    <div class="d-flex align-items-center justify-content-around mb-3 px-5">
                        <div class="form-check">
                            <input name='favori' class="form-check-input" type="radio" value=1 id="flexCheckDefault">
                            <label class="form-check-label text-white" for="flexCheckDefault">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input name='favori' class="form-check-input" type="radio" value=0 id="flexCheckChecked" checked>
                            <label class="form-check-label text-white" for="flexCheckChecked">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>title</label>
                            <input class='form-control' type='text' name='title'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>description</label>
                            <textarea style='width:227.6px;' class='form-control' cols="25" rows="10" type='text' name='description'></textarea>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>discipline</label>
                            <input type='text' name='discipline'>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>price</label>
                            <input class='form-control' type='text' name='price'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>level</label>
                            <input class='form-control' type='text' name='level'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>start</label>
                            <input class='form-control' type='date' name='start'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>duration</label>
                            <input class='form-control' type='text' name='duration'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center'>
                            <label class='text-uppercase text-white mb-2' for=''>image</label>
                            <input class='text-white' type="file" name='image'>
                        </div>
                    </div>
                    <div class="col-4 d-flex flex-column align-items-start justify-content-center rounded p-3">
                        <label class='text-uppercase text-white mb-2 w-100' for=''>categories</label>
                        @foreach ($categories as $categorie)
                            <div class='form-check'>
                                    <input class='form-check-input' type='checkbox' name='categories[]' value="{{ $categorie->id }}">
                                <label class='text-white' for='checkbox{{ $categorie->id }}'>{{ $categorie->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row mx-5">
                    <button class='btn btn-dark mt-3 mb-2' type='submit'>Create</button> {{-- create_blade_anchor --}}
                </div>
            </form>
    </section>
@endsection
