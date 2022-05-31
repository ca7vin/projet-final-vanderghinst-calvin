@extends('layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section d-flex flex-column align-items-center justify-content-center">
        <div class="d-flex flex-column align-items-center justify-content-center">
            <img class='w-100' src="{{ asset('images/logo.png') }}" alt="">
        </div>
        <div class="text">Dashboard</div>
        <h2 class="mb-3">Vous êtes connecté en tant que <strong>{{ auth()->user()->name }}</strong>
            (<em>{{ auth()->user()->role->name }})</em></h2>
            <img class='rounded-circle mb-3' style='width:120px !important;border: solid 5px #A12C2F !important;' src="{{ asset('images/' . auth()->user()->image) }}" alt="">
        <a class='btn btn-dark' href='{{ route('message.index') }}' role='button'>Vous avez
            {{ $messages->where('to', '==', auth()->user()->email)->count() }} message(s)</a>
        @if (auth()->user()->prof)
            <a class='btn btn-danger mt-3' href='{{ route('demande.index') }}' role='button'>Vous avez
                {{ $demandes->where('to', '==', auth()->user()->name)->count() }} demande(s)</a>
        @elseif (auth()->user())
            <a class='btn btn-danger mt-3' href='{{ route('demande.index') }}' role='button'>Vous avez
                {{ $demandes->where('from', '==', auth()->user()->name)->count() }} demande(s)</a>
        @endif
    </section>
@endsection
