@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Commentaires</h1>
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
        <a class='btn btn-success' href='{{ route('commentaire.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>user</th>
                    <th scope='col'>content</th>
                    <th scope='col'>Post</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($commentaires as $commentaire)
                    <tr>
                        <th scope='row'>{{ $commentaire->id }}</th>
                        <td>{{ $commentaire->user->name }}</td>
                        <td>{{ $commentaire->content }}</td>
                        <td>{{ $commentaire->post->title }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('commentaire.destroy', $commentaire->id) }}' method='post'>
                                    @csrf
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-3' href='{{ route('commentaire.edit', $commentaire->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('commentaire.read', $commentaire->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
