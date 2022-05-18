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
        <form action='{{ route('event.update' , $event->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>start_time</label>
                <input type='text' name='start_time' value='{{ $event->start_time }}'>
            </div>
            <div>
                <label for=''>end_time</label>
                <input type='text' name='end_time' value='{{ $event->end_time }}'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $event->title }}'>
            </div>
            <div>
                <label for=''>description</label>
                <input type='text' name='description' value='{{ $event->description }}'>
            </div>
            <div>
                <label for=''>image1</label>
                <input type='text' name='image1' value='{{ $event->image1 }}'>
            </div>
            <div>
                <label for=''>image2</label>
                <input type='text' name='image2' value='{{ $event->image2 }}'>
            </div>
            <div>
                <label for=''>image3</label>
                <input type='text' name='image3' value='{{ $event->image3 }}'>
            </div>
            <div>
                <label for=''>phone</label>
                <input type='text' name='phone' value='{{ $event->phone }}'>
            </div>
            <div>
                <label for=''>email</label>
                <input type='text' name='email' value='{{ $event->email }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
