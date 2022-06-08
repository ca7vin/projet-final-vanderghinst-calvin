@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
            <div class="card" style="width: 18rem;background-color:#A12C2F">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold text-white">{{ $prof->user->name }}</h5>
                    <p class="card-text text-center fst-italic text-white">{{ $prof->subject }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'>
                        <strong>Short Bio</strong> : {{ $prof->bio_short }}
                    </li>
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'><strong>Long
                            Bio</strong>
                        : <br>{{ $prof->bio_short }}</li>
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'><strong>Phone</strong>
                        : <br>{{ $prof->phone }}</li>
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'>
                        <strong>Skype</strong>
                        : <br>{{ $prof->skype }}</li>
                </ul>
                <div class="card-body d-flex justify-content-around">
                    <a class='btn btn-dark' href='{{ route('users.index') }}' role='button'>Back</a>
                    @can('update', $prof)
                        <a class='btn btn-dark' href='{{ route('profs.edit', $prof->id) }}' role='button'>Edit</a>
                    @endcan
                    {{-- @if ($user->role_id == 2)
                        <a class='btn btn-dark mx-3' href='{{ route('prof.read', $user->prof->id) }}'
                            role='button'>Teacher</a>
                    @endif --}}
                </div>
            </div>
            {{-- <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase' scope='col'>name</th>
                        <th class='text-uppercase' scope='col'>subject</th>
                        <th class='text-uppercase' scope='col'>bio_short</th>
                        <th class='text-uppercase' scope='col'>bio_long</th>
                        <th class='text-uppercase' scope='col'>phone</th>
                        <th class='text-uppercase' scope='col'>skype</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $prof->id }}</th>
                        <td>{{ $prof->user->name }}</td>
                        <td>{{ $prof->subject }}</td>
                        <td>{!! Str::words($prof->bio_short, '12') !!}</td>
                        <td>{!! Str::words($prof->bio_long, '12') !!}</td>
                        <td>{{ $prof->phone }}</td>
                        <td>{{ $prof->skype }}</td>
                        <td class='d-flex align-items-center justify-content-around'>
                            <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                            @can('update', $prof)
                                <a class='btn btn-warning mx-3' href='{{ route('prof.edit', $prof->id) }}'
                                    role='button'>Edit</a>
                            @endcan
                        </td>
                    </tr>
                </tbody>
            </table> --}}
        </div>
    @endsection
