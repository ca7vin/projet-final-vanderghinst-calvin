@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Events</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('event.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>start_time</label>
                <input type='text' name='start_time'>
            </div>
            <div>
                <label for=''>end_time</label>
                <input type='text' name='end_time'>
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
                <label for=''>image1</label>
                <input type='text' name='image1'>
            </div>
            <div>
                <label for=''>image2</label>
                <input type='text' name='image2'>
            </div>
            <div>
                <label for=''>image3</label>
                <input type='text' name='image3'>
            </div>
            <div>
                <label for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
