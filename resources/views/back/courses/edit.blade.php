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
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('course.update' , $course->id) }}' method='post'>
            @csrf
            {{-- <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>prof</label>
                <input type='text' name='prof' value='{{ $course->prof->user->name }}'>
            </div> --}}
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>title</label>
                <input type='text' name='title' value='{{ $course->title }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>description</label>
                <input type='text' name='description' value='{{ $course->description }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>discipline</label>
                <input type='text' name='discipline' value='{{ $course->discipline }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>price</label>
                <input type='text' name='price' value='{{ $course->price }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>level</label>
                <input type='text' name='level' value='{{ $course->level }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>start</label>
                <input type='date' name='start' value='{{ $course->start }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>duration</label>
                <input type='text' name='duration' value='{{ $course->duration }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>image</label>
                <input type="file" name='image'>
            </div>
            <button class='btn btn-primary mb-5' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
</section>
@endsection
