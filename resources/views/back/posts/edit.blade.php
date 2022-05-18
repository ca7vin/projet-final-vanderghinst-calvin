@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Posts</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('post.update' , $post->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $post->title }}'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text' value='{{ $post->text }}'>
            </div>
            <div>
                <label for=''>quote</label>
                <input type='text' name='quote' value='{{ $post->quote }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
