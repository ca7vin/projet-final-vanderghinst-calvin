@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Answer</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='w-100 p-3 mt-5 rounded' style='background-color:#A12C2F' action='{{ route('contactform.mail', $contactform->id) }}'
            method='POST' enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase text-white mb-2" for=''>from</label>
                <input type='text' name='from' value='{{ $contactform->to }}'>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase text-white mb-2" for=''>to</label>
                <input type='text' name='to' value='{{ $contactform->from }}'>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase text-white mb-2" for=''>content</label>
                <textarea cols="25" rows="10" type='text' name='content' value=''></textarea>
            </div>
            <div class="row mx-5">
                <button class="btn btn-dark mt-3 mb-2" type='submit'>Reply</button> {{-- create_blade_anchor --}}
            </div>        
        </form>
    </div>
@endsection
