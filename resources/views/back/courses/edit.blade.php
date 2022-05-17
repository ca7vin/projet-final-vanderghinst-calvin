@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Courses</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('course.update' , $course->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>prof</label>
                <input type='text' name='prof' value='{{ $course->prof }}'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $course->title }}'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description' value='{{ $course->description }}'>
            </div>
            <div>
                <label for=''>discipline</label>
                <input type='text' name='discipline' value='{{ $course->discipline }}'>
            </div>
            <div>
                <label for=''>price</label>
                <input type='text' name='price' value='{{ $course->price }}'>
            </div>
            <div>
                <label for=''>level</label>
                <input type='text' name='level' value='{{ $course->level }}'>
            </div>
            <div>
                <label for=''>start</label>
                <input type='text' name='start' value='{{ $course->start }}'>
            </div>
            <div>
                <label for=''>duration</label>
                <input type='text' name='duration' value='{{ $course->duration }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
