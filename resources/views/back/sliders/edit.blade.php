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
            <form class="d-flex flex-column align-items-center justify-content-center"  action='{{ route('slider.update', $slider->id) }}' method='post'>
                @csrf
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>first</label>
                    <input type='text' name='first' value='{{ $slider->first }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>image</label>
                    <input type='text' name='image' value='{{ $slider->image }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>title</label>
                    <input type='text' name='title' value='{{ $slider->title }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>text</label>
                    <input type='text' name='text' value='{{ $slider->text }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>textorange</label>
                    <input type='text' name='textorange' value='{{ $slider->textorange }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>btntext</label>
                    <input type='text' name='btntext' value='{{ $slider->btntext }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label for=''>btnlink</label>
                    <input type='text' name='btnlink' value='{{ $slider->btnlink }}'>
                </div>
                <button type='submit'>Update</button> {{-- update_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
