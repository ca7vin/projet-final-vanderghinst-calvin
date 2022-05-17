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
        <form action='{{ route('course.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>prof</label>
                <input type='text' name='prof'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description'>
            </div>
            <div>
                <label for=''>discipline</label>
                <input type='text' name='discipline'>
            </div>
            <div>
                <label for=''>price</label>
                <input type='text' name='price'>
            </div>
            <div>
                <label for=''>level</label>
                <input type='text' name='level'>
            </div>
            <div>
                <label for=''>start</label>
                <input type='text' name='start'>
            </div>
            <div>
                <label for=''>duration</label>
                <input type='text' name='duration'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
