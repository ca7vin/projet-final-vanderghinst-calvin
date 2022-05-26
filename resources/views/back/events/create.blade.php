@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Events</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('event.store') }}' method='post'>
            @csrf
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>start time</label>
                <input type='text' name='start_time'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>end time</label>
                <input type='text' name='end_time'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>date</label>
                <input type='date' name='date'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>location</label>
                <input type='text' name='location'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>title</label>
                <input type='text' name='title'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>description</label>
                <textarea rows="10" type='text' name='description' style='width:227.6px;'></textarea>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class="text-uppercase" for=''>email</label>
                <input type='text' name='email'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>image1</label>
                <input type="file" name='image1'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>image2</label>
                <input type="file" name='image2'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>image3</label>
                <input type="file" name='image3'>
            </div>
            <label class='text-uppercase mt-3' for=''>categories</label>
            @foreach ($categories as $categorie)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                        value='{{ $categorie->id }}'>
                    <label for='checkbox{{ $categorie->id }}'>{{ $categorie->name }}</label>
                </div>
            @endforeach
            <button class='btn btn-success mb-5' type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
</section>
@endsection
