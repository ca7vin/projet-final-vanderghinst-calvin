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
        <form class='d-flex flex-col align-items-center justify-content-center' action='{{ route('categorie.store') }}' method='post'>
            @csrf
            <div class='d-flex flex-col align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>name</label>
                <input type='text' name='name'>
            </div>
            <button class="btn btn-success" type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
