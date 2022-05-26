@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">News</div>
            @if (session()->has('message'))
                <div class='alert alert-success'>
                    {{ session()->get('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a class='btn btn-success' href='{{ route('post.create') }}' role='button'>Create</a>
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase col-1' scope='col'>Image</th>
                        <th class='text-uppercase' scope='col'>Writer</th>
                        <th class='text-uppercase' scope='col'>title</th>
                        <th class='text-uppercase' scope='col'>text</th>
                        <th class='text-uppercase' scope='col'>quote</th>
                        <th class='text-uppercase' scope='col'>category</th>
                        <th class='text-uppercase' scope='col'>tag</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope='row'>{{ $post->id }}</th>
                            <td>
                                <img src="{{ asset('images/' . $post->image) }}" alt="">
                            </td>
                            <td>
                            @if ($post->redacteur)
                            {{ $post->redacteur->user->name }}
                            @else
                            Administrateur
                            @endif
                            </td>
                            <td>{{ $post->title }}</td>
                            <td>{!! (Str::words($post->text, '12')) !!}</td>
                            <td>{{ $post->quote }}</td>
                            <td>
                                <ul>
                                    @foreach ($post->categories as $categorie)
                                        <li>{{ $categorie->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    @foreach ($post->tags as $tag)
                                        <li>{{ $tag->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    <form action='{{ route('post.destroy', $post->id) }}' method='post'>
                                        @csrf
                                        <button class="btn btn-danger" type=submit>Delete</button>
                                    </form>
                                    <a class='btn btn-primary mx-3' href='{{ route('post.edit', $post->id) }}'
                                        role='button'>Edit</a>
                                    <a class='btn btn-primary' href='{{ route('post.read', $post->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
