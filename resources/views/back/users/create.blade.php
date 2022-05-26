@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-5">
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
            <form class='d-flex align-items-center justify-content-center w-100 p-3 mt-5 rounded' style='background-color:#A12C2F' action='{{ route('user.store') }}'
                method='post' enctype="multipart/form-data">
                @csrf
                <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-2" for=''>name</label>
                        <input type='text' name='name'>
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-2" for=''>email</label>
                        <input type='text' name='email'>
                    </div>
                    <div class="d-flex flex-column align-items-start justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-2" for=''>password</label>
                        <input type='text' name='password'>
                    </div>
                </div>
                <div class="col-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                        <label class="text-uppercase text-white mb-2" for="inputGroupSelect01">Role</label>
                        <select name='role_id' class="form-select" id="inputGroupSelect01">
                            <option value="null" selected>Choose...</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class='d-flex flex-column align-items-center justify-content-center'>
                        <label class='text-uppercase text-white mb-2' for=''>image</label>
                        <input class='text-white' type="file" name='image'>
                    </div>
                </div>
            </form>
            <button class="btn btn-success my-5" type='submit'>Create</button> {{-- create_blade_anchor --}}
        </div>
    </section>
@endsection
