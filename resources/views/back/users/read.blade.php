@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Users</div>
            <div class="card" style="width: 18rem;background-color:#A12C2F">
                <img src="{{ asset('images/' . $user->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold text-white">{{ $user->name }}</h5>
                    <p class="card-text text-center fst-italic text-white">{{ $user->role->name }}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'>
                        <strong>Password</strong> : {{ $user->password }}</li>
                    <li class="list-group-item text-white" style='background-color:#A12C2F !important'><strong>Email</strong>
                        : <br>{{ $user->email }}</li>
                </ul>
                <div class="card-body d-flex justify-content-around">
                    <a class='btn btn-dark' href='{{ route('user.index') }}' role='button'>Back</a>
                    @if ($user->role_id == 2)
                        <a class='btn btn-dark mx-3' href='{{ route('prof.read', $user->prof->id) }}'
                            role='button'>Teacher</a>
                    @endif
                </div>
            </div>
    </section>
@endsection
