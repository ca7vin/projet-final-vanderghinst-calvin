@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Tags</div>
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
            @can('create', App\Tag::class)
                <a class='btn btn-success' href='{{ route('tag.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase col-8' scope='col'>name</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <th scope='row'>{{ $tag->id }}</th>
                            <td>{{ $tag->name }}</td>
                            <td> {{-- all_td_anchor --}}
                                @can('delete', $tag)
                                    <form action='{{ route('tag.destroy', $tag->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td>
                                @can('delete', $tag)
                                    <a class='btn btn-dark' href='{{ route('tag.edit', $tag->id) }}'
                                        role='button'>Edit</a>
                                @endcan
                            </td>
                            <td>
                                <a class='btn btn-dark' href='{{ route('tag.read', $tag->id) }}' role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
