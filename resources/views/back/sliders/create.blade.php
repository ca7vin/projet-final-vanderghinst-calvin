@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Sliders</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form enctype="multipart/form-data" class='w-100 p-3 my-5 rounded' action='{{ route('slider.store') }}'
                method='post' style='background-color:#A12C2F'>
                @csrf
                <div class="row mx-5 p-2 rounded mb-3" style='background-color:#741f21'>
                    <label class='text-uppercase text-white mb-2 text-center' for=''>Display in first ?</label>
                    <div class="d-flex align-items-center justify-content-around mb-3 px-5">
                        <div class="form-check">
                            <input name='first' class="form-check-input" type="radio" value=1 id="flexCheckDefault">
                            <label class="form-check-label text-white" for="flexCheckDefault">
                                Yes
                            </label>
                        </div>
                        <div class="form-check">
                            <input name='first' class="form-check-input" type="radio" value=0 id="flexCheckChecked" checked>
                            <label class="form-check-label text-white" for="flexCheckChecked">
                                No
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>title</label>
                            <input type='text' name='title'>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>text</label>
                            <textarea rows="10" type='text' name='text' style='width:227.6px;'></textarea>
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>textorange</label>
                            <input type='text' name='textorange'>
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>btntext</label>
                            <input type='text' name='btntext'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>btnlink</label>
                            <input type='text' name='btnlink'>
                        </div>
                        <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>image</label>
                            <input class='text-white' type="file" name='image'>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <button class='btn btn-dark mt-3 mb-2' type='submit'>Create</button> {{-- create_blade_anchor --}}
                </div>
            </form>
        </div>
    </section>
@endsection
