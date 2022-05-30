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
        <form action='{{ route('demande.update' , $demande->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>from</label>
                <input type='text' name='from' value='{{ $demande->from }}'>
            </div>
            <div>
                <label for=''>to</label>
                <input type='text' name='to' value='{{ $demande->to }}'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content' value='{{ $demande->content }}'>
            </div>
            <div>
                <label for=''>date</label>
                <input type='date' name='date' value='{{ $demande->date }}'>
            </div>
            <button class="btn btn-dark my-5" type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
