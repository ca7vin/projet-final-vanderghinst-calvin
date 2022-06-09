@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Rendez-vous</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('demandes.create') }}' method='post'>
            @csrf
            @method('POST')
            <div>
                <label for=''>from</label>
                <input type='text' name='from'>
            </div>
            <div>
                <label for=''>to</label>
                <input type='text' name='to'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
