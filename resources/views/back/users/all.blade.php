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
                <a class='btn btn-success' href='{{ route('users.create') }}' role='button'>Create</a>
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
                    @if (auth()->user()->role_id == 1)
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
                                    @can('delete', $user)
                                        <form action='{{ route('users.destroy', $user->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $user)
                                        <a class='btn btn-dark' href='{{ route('users.edit', $user->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('users.show', $user->id) }}'
                                        role='button'>Read</a>
                                </td>
                                <td>
                                    @if ($user->role_id == 2)
                                        <a class='btn btn-dark' href='{{ route('profs.show', $user->prof->id) }}'
                                            role='button'>Teacher</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @else
                        @foreach ($users->where("name", "==", auth()->user()->name) as $user)
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
                                    @can('delete', $user)
                                        <form action='{{ route('users.destroy', $user->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $user)
                                        <a class='btn btn-dark' href='{{ route('users.edit', $user->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('users.show', $user->id) }}'
                                        role='button'>Read</a>
                                </td>
                                <td>
                                    @if ($user->role_id == 2)
                                        <a class='btn btn-dark' href='{{ route('profs.show', $user->prof->id) }}'
                                            role='button'>Teacher</a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection
