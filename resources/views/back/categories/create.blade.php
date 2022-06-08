@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Categories</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='w-100 p-3 mt-5 rounded' style='background-color:#A12C2F' action='{{ route('categories.store') }}'
                method='post' enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-12 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-col align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase text-white mb-2' for=''>name</label>
                            <input type='text' name='name' value=''>
                        </div>
                    </div>
                </div>
                <div class="row mx-5">
                    <button class="btn btn-dark mt-3 mb-2" type='submit'>Create</button> {{-- create_blade_anchor --}}
                </div>
            </form>
        </div>
    @endsection
