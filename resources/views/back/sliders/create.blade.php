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
            <form class="d-flex flex-column align-items-center justify-content-center" action='{{ route('slider.store') }}'
                method='post' enctype="multipart/form-data">
                @csrf
                <label class='text-uppercase' for=''>Display in first ?</label>
                <div class="d-flex align-items-center justify-content-around mb-3">
                    <div class="form-check">
                        <input name='first' class="form-check-input" type="radio" value=1 id="flexCheckDefault">
                        <label class="form-check-label me-3" for="flexCheckDefault">
                            Yes
                        </label>
                    </div>
                    <div class="form-check">
                        <input name='first' class="form-check-input" type="radio" value=0 id="flexCheckChecked" checked>
                        <label class="form-check-label" for="flexCheckChecked">
                            No
                        </label>
                    </div>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>title</label>
                    <input type='text' name='title'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>text</label>
                    <textarea rows="10" type='text' name='text' style='width:227.6px;'></textarea>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>textorange</label>
                    <input type='text' name='textorange'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>btntext</label>
                    <input type='text' name='btntext'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>btnlink</label>
                    <input type='text' name='btnlink'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>image</label>
                    <input type="file" name='image'>
                </div>
                <button class='btn btn-success mb-5' type='submit'>Create</button> {{-- create_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
