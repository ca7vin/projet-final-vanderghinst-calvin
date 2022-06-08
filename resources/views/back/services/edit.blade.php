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
            <form class='w-100 p-3 mt-5 rounded' style='background-color:#A12C2F' action='{{ route('users.store') }}'
                method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-3" for=''>title</label>
                        <input type='text' name='title'>
                    </div>
                    <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-3" for=''>text</label>
                        <input type='text' name='text'>
                    </div>
                </div>
                <div class="row bg-light mx-5 p-3 rounded">
                    <label class='text-uppercase text-center' for=''>icon</label>
                    <div class='d-flex align-items-center justify-content-center mb-3'>
                        @foreach ($icons as $icon)
                            <div class="d-flex flex-column align-items-center justify-content-between"
                                style='width: 80px !important;'>
                                @if ($service->icon == $icon->icon)
                                    <input name='icon' class="form-check-input" type="radio" value="{{ $icon->icon }}"
                                        id="flexCheckDefault" checked>
                                @else
                                    <input name='icon' class="form-check-input" type="radio" value="{{ $icon->icon }}"
                                        id="flexCheckDefault">
                                    
                                @endif
                                <label class="form-check-label m-0 p-0" for="flexCheckDefault">
                                    {!! $icon->icon !!}
                                </label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row mx-5">
                    <button class="btn btn-dark mt-3 mb-2" type='submit'>Create</button> {{-- create_blade_anchor --}}
                </div>
            </form>
        </div>
    </section>
@endsection
