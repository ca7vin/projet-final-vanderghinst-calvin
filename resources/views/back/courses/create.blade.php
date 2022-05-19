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
            <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('course.store') }}' method='post'>
                @csrf
                {{-- <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>prof</label>
                    <input type='text' name='prof'>
                </div> --}}
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>title</label>
                    <input type='text' name='title'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>description</label>
                    <input type='text' name='description'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>discipline</label>
                    <input type='text' name='discipline'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>price</label>
                    <input type='text' name='price'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>level</label>
                    <input type='text' name='level'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>start</label>
                    <input type='date' name='start'>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>duration</label>
                    <input type='text' name='duration'>
                </div>
                <button class='btn btn-success mb-5' type='submit'>Create</button> {{-- create_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
