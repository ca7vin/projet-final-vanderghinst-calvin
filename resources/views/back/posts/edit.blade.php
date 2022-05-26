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
            <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                <label class='text-uppercase' for=''>image</label>
                <input type="file" name='image'>
            </div>
            <label class='text-uppercase mt-3' for=''>categories</label>
            @foreach ($categories as $categorie)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $categorie->id }}' class='form-check-input' name='categories[]'
                        value='{{ $categorie->id }}'>
                    <label for='checkbox{{ $categorie->id }}'>{{ $categorie->name }}</label>
                </div>
            @endforeach
            <label class='text-uppercase mt-3' for=''>tags</label>
            @foreach ($tags as $tag)
                <div class='form-check'>
                    <input type='checkbox' id='checkbox{{ $tag->id }}' class='form-check-input' name='tags[]'
                        value='{{ $tag->id }}'>
                    <label for='checkbox{{ $tag->id }}'>{{ $tag->name }}</label>
                </div>
            @endforeach
            <button class='btn btn-primary my-5' type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
    </section>
@endsection
