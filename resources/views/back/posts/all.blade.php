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
            @can('create', App\Models\Post::class)
                <a class='btn btn-success' href='{{ route('posts.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase col-1' scope='col'>Image</th>
                        <th class='text-uppercase' scope='col'>Status</th>
                        <th class='text-uppercase' scope='col'>Writer</th>
                        <th class='text-uppercase' scope='col'>title</th>
                        <th class='text-uppercase' scope='col'>text</th>
                        <th class='text-uppercase' scope='col'>quote</th>
                        <th class='text-uppercase' scope='col'>category</th>
                        <th class='text-uppercase' scope='col'>tag</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @if (auth()->user()->role_id == 1)
                        @foreach ($posts as $post)
                            <tr>
                                <th scope='row'>{{ $post->id }}</th>
                                <td>
                                    <img src="{{ asset('images/' . $post->image) }}" alt="">
                                </td>
                                <td>
                                    @if ($post->status == 1)
                                        <span class='text-success'>Accepted</span>
                                    @else
                                        <span class='text-danger'>Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($post->redacteur)
                                        {{ $post->redacteur->user->name }}
                                    @else
                                        Administrateur
                                    @endif
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{!! Str::words($post->text, '12') !!}</td>
                                <td>{{ $post->quote }}</td>
                                <td>
                                    <ul>
                                        @foreach ($post->categories as $categorie)
                                            <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>{{ $categorie->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($post->tags as $tag)
                                            <li style='background-color: #F5A425 !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td> {{-- all_td_anchor --}}
                                    @can('delete', $post)
                                        <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                                            @csrf
                                            <button class="btn btn-danger" type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $post)
                                        <a class='btn btn-dark' href='{{ route('posts.edit', $post->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('posts.show', $post->id) }}'
                                        role='button'>Read</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if (auth()->user()->role_id == 3)
                        @foreach ($posts->where('redacteur_id', '==', auth()->user()->redacteur_id) as $post)
                            <tr>
                                <th scope='row'>{{ $post->id }}</th>
                                <td>
                                    <img src="{{ asset('images/' . $post->image) }}" alt="">
                                </td>
                                <td>
                                    @if ($post->status == 1)
                                        <span class='text-success'>Accepted</span>
                                    @else
                                        <span class='text-danger'>Pending</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($post->redacteur)
                                        {{ $post->redacteur->user->name }}
                                    @else
                                        Administrateur
                                    @endif
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{!! Str::words($post->text, '12') !!}</td>
                                <td>{{ $post->quote }}</td>
                                <td>
                                    <ul>
                                        @foreach ($post->categories as $categorie)
                                            <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>{{ $categorie->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($post->tags as $tag)
                                            <li style='background-color: #F5A425 !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>{{ $tag->name }}</li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td> {{-- all_td_anchor --}}
                                    @can('delete', $post)
                                        <form action='{{ route('posts.destroy', $post->id) }}' method='post'>
                                            @csrf
                                            <button class="btn btn-danger" type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $post)
                                        <a class='btn btn-dark' href='{{ route('posts.edit', $post->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('posts.show', $post->id) }}'
                                        role='button'>Read</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection
