@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('prof.store') }}' method='post'>
            @csrf
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>subject</label>
                <input type='text' name='subject'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>bio_short</label>
                <input type='text' name='bio_short'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>bio_long</label>
                <input type='text' name='bio_long'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>skype</label>
                <input type='text' name='skype'>
            </div>
            <button class='btn btn-success mb-5' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
    </section>
@endsection
