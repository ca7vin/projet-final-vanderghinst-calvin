@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Users</div>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col' class="col-1">image</th>
                        <th scope='col'>name</th>
                        <th scope='col'>email</th>
                        <th scope='col'>password</th>
                        <th scope='col'>role</th>
                    </tr> {{-- read_tr_anchor --}}
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $user->id }}</th>
                        <td>
                            <img src="{{ asset('images/' . $user->image) }}" alt="">
                        </td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->password }}</td>
                        <td>{{ $user->role->name }}</td>
                        <td> {{-- read_td_anchor --}}
                            <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                            @if ($user->role_id == 2)
                                <a class='btn btn-dark mx-3' href='{{ route('prof.read', $user->prof->id) }}'
                                    role='button'>Teacher</a>
                            @endif
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
@endsection
