@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Users</div>
            @if ($errors->any())
                <div class='alert alert-danger'>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="d-flex flex-column align-items-center justify-content-center"
                action='{{ route('user.store', $user->id) }}' method='post'>
                @csrf
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label class="text-uppercase" for=''>name</label>
                    <input type='text' name='name' value='{{ $user->name }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label class="text-uppercase" for=''>email</label>
                    <input type='text' name='email' value='{{ $user->email }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                    <label class="text-uppercase" for=''>password</label>
                    <input type='text' name='password' value='{{ $user->password }}'>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                        <label class="text-uppercase" for="inputGroupSelect01">Role</label>
                        <select name='role_id' class="form-select" id="inputGroupSelect01">
                          <option selected>{{ $user->role->name }}</option>
                          @foreach ($roles as $role)
                          <option value="{{ $role->id }}">{{ $role->name }}</option>
                          @endforeach
                        </select>
                </div>
                <div class='d-flex flex-column align-items-center justify-content-center mb-3'>
                    <label class='text-uppercase' for=''>image</label>
                    <input type="file" name='image'>
                </div>
                <button class='btn btn-success' type='submit'>Create</button> {{-- update_blade_anchor --}}
            </form>
        </div>
    </section>
@endsection
