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
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('prof.update' , $prof->id) }}' method='post'>
            @csrf
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>subject</label>
                <input type='text' name='subject' value='{{ $prof->subject }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>bio short</label>
                <input type='text' name='bio_short' value='{{ $prof->bio_short }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>bio long</label>
                <input type='text' name='bio_long' value='{{ $prof->bio_long }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>phone</label>
                <input type='text' name='phone' value='{{ $prof->phone }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>skype</label>
                <input type='text' name='skype' value='{{ $prof->skype }}'>
            </div>
            <button class='btn btn-primary mb-5' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
    </section>
@endsection
