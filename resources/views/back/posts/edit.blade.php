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
            <form enctype="multipart/form-data" class='w-100 p-3 my-5 rounded' action='{{ route('post.update', $post->id) }}'
                method='post' style='background-color:#A12C2F'>
                @csrf
                @if (auth()->user()->role->name == 'Administrateur')
                    <div class="row mx-5 p-2 rounded mb-3" style='background-color:#741f21'>
                        <label class='text-uppercase text-white mb-2 text-center' for=''>Status ?</label>
                        <div class="d-flex align-items-center justify-content-around mb-3 px-5">
                            <div class="form-check">
                                <input name='status' class="form-check-input" type="radio" value=1 id="flexCheckDefault">
                                <label class="form-check-label text-white" for="flexCheckDefault">
                                    Accepted
                                </label>
                            </div>
                            <div class="form-check">
                                <input name='status' class="form-check-input" type="radio" value=0 id="flexCheckChecked"
                                    checked>
                                <label class="form-check-label text-white" for="flexCheckChecked">
                                    Pending
                                </label>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row">
                    <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase mb-2 text-white' for=''>title</label>
                            <input type='text' name='title' value="{{ $post->title }}">
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase mb-2 text-white' for=''>text</label>
                            <textarea style='width:227.6px;' class='form-control' cols="25" rows="10" type='text'
                                name='text'>{{ $post->text }}</textarea>

                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase mb-2 text-white' for=''>quote</label>
                            <input type='text' name='quote' value="{{ $post->quote }}">
                        </div>
                        <div class='d-flex flex-column align-items-start justify-content-center mb-3'>
                            <label class='text-uppercase mb-2 text-white' for=''>image</label>
                            <input type="file" name='image' class="text-white">
                        </div>
                    </div>
                    <div class="col-6 d-flex flex-column align-items-start ps-4 justify-content-center">
                        <label class='text-uppercase mb-2 text-white mt-3' for=''>categories</label>
                        @foreach ($categories as $categorie)
                            <div class='form-check'>
                                @if ($post->categories->contains($categorie))
                                    <input class='form-check-input' type='checkbox' name='categories[]'
                                        value="{{ $categorie->id }}" checked>
                                @else
                                    <input class='form-check-input' type='checkbox' name='categories[]'
                                        value="{{ $categorie->id }}">
                                @endif
                                <label class='text-white'
                                    for='checkbox{{ $categorie->id }}'>{{ $categorie->name }}</label>
                            </div>
                        @endforeach
                        <label class='text-uppercase mb-2 text-white mt-5' for=''>tags</label>
                        @foreach ($tags as $tag)
                            <div class='form-check'>
                                @if ($post->tags->contains($tag))
                                    <input class='form-check-input' type='checkbox' name='tags[]'
                                        value="{{ $tag->id }}" checked>
                                @else
                                    <input class='form-check-input' type='checkbox' name='tags[]'
                                        value="{{ $tag->id }}">
                                @endif
                                <label class='text-white' for='checkbox{{ $tag->id }}'>{{ $tag->name }}</label>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="row mx-5">
                    <button class='btn btn-dark mt-3 mb-2' type='submit'>Update</button> {{-- create_blade_anchor --}}
                </div>
            </form>
        </div>
    </section>
@endsection
