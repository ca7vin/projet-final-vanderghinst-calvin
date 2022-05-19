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
            <form class="d-flex flex-column align-items-center justify-content-center" action='{{ route('slider.store') }}' method='post'>
                @csrf
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>first</label>
                    <input type='text' name='first'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>image</label>
                    <input type='text' name='image'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>title</label>
                    <input type='text' name='title'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>text</label>
                    <input type='text' name='text'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>textorange</label>
                    <input type='text' name='textorange'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>btntext</label>
                    <input type='text' name='btntext'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label for=''>btnlink</label>
                    <input type='text' name='btnlink'>
                </div>
                <button type='submit'>Create</button> {{-- create_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
