@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Users</div>
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
            @can('create', App\User::class)
                <a class='btn btn-success' href='{{ route('user.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase col-1' scope='col'>image</th>
                        <th class='text-uppercase' scope='col'>name</th>
                        <th class='text-uppercase' scope='col'>email</th>
                        <th class='text-uppercase' scope='col'>password</th>
                        <th class='text-uppercase' scope='col'>role</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope='row'>{{ $user->id }}</th>
                            <td>
                                <img src="{{ asset('images/' . $user->image) }}" alt="">
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ Illuminate\Support\Str::limit($user->password, 15) }}</td>
                            <td>{{ $user->role->name }}</td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    @can('delete', $user)
                                        <form action='{{ route('user.destroy', $user->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                    @can('update', $user)
                                    <a class='btn btn-primary mx-3' href='{{ route('user.edit', $user->id) }}'
                                        role='button'>Edit</a>
                                    @endcan
                                    <a class='btn btn-primary' href='{{ route('user.read', $user->id) }}'
                                        role='button'>Read</a>
                                    @if ($user->role_id == 2)
                                        <a class='btn btn-dark mx-3' href='{{ route('prof.read', $user->prof->id) }}'
                                            role='button'>Teacher</a>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
