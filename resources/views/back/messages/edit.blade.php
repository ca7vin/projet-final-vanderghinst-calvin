@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Messages</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('message.update' , $message->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>from</label>
                <input type='text' name='from' value='{{ $message->from }}'>
            </div>
            <div>
                <label for=''>to</label>
                <input type='text' name='to' value='{{ $message->to }}'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content' value='{{ $message->content }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
