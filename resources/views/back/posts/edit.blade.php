@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">News</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('post.update' , $post->id) }}' method='post'>
            @csrf
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>title</label>
                <input type='text' name='title' value='{{ $post->title }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>text</label>
                <input type='text' name='text' value='{{ $post->text }}'>
            </div>
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>quote</label>
                <input type='text' name='quote' value='{{ $post->quote }}'>
            </div>
            <button class='btn btn-primary' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
    </section>
@endsection
