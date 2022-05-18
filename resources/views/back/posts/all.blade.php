@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Posts</h1>
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
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                    <th scope='col'>quote</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope='row'>{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->text }}</td>
                        <td>{{ $post->quote }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('post.destroy', $post->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('post.edit', $post->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('post.read', $post->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
