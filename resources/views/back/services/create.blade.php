@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Services</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('service.store') }}' method='post'>
            @csrf
            <label class='text-uppercase' for=''>icon</label>
                <div class='d-flex align-items-center justify-content-center mb-3'>
                    @foreach ($icons as $icon)
                    <div class="d-flex flex-column align-items-center justify-content-between" style='width: 80px !important;'>
                        <input name='icon' class="form-check-input" type="radio" value="{{ $icon->icon }}" id="flexCheckDefault">
                        <label class="form-check-label m-0 p-0" for="flexCheckDefault">
                            {!! $icon->icon !!}
                        </label>
                    </div>
                    @endforeach
                </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase" for=''>title</label>
                <input type='text' name='title'>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase" for=''>text</label>
                <input type='text' name='text'>
            </div>
            <button class="btn btn-success mb-5" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
    </section>
@endsection
