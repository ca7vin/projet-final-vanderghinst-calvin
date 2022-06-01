@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Categories</div>
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
            @can('create', App\Category::class)
                <a class='btn btn-success' href='{{ route('categorie.create') }}' role='button'>Create</a>
            @endcan <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th class='text-uppercase col-8' scope='col'>name</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($categories as $categorie)
                        <tr>
                            <th scope='row'>{{ $categorie->id }}</th>
                            <td>{{ $categorie->name }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    @can('delete', $categorie)
                                        <form action='{{ route('categorie.destroy', $categorie->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $categorie)
                                        <a class='btn btn-primary mx-3' href='{{ route('categorie.edit', $categorie->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                    <a class='btn btn-primary' href='{{ route('categorie.read', $categorie->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
