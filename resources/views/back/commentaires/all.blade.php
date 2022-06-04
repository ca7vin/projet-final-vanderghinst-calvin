@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Commentaires</div>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th class="text-uppercase" scope='col'>user</th>
                    <th class="text-uppercase" scope='col'>content</th>
                    <th class="text-uppercase" scope='col'>Post</th>
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
                            <form action='{{ route('commentaire.destroy', $commentaire->id) }}' method='post'>
                                @csrf
                                <button class='btn btn-danger' type=submit>Delete</button>
                            </form>
                        </td>
                        <td>
                            <a class='btn btn-primary' href='{{ route('commentaire.edit', $commentaire->id) }}'
                                role='button'>Edit</a>
                        </td>
                        <td>
                            <a class='btn btn-primary' href='{{ route('commentaire.read', $commentaire->id) }}'
                                role='button'>Read</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
