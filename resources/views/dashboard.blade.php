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
        <img class='rounded-circle mb-3' style='width:120px !important;border: solid 5px #A12C2F !important;'
            src="{{ asset('images/' . auth()->user()->image) }}" alt="">


        @if (auth()->user()->prof)
            <a class='btn btn-dark' href='{{ route('messages.index') }}' role='button'>Vous avez
                {{ $messages->where('to', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} message(s)</a>
            <a class='btn btn-danger mt-3' href='{{ route('demandes.index') }}' role='button'>Vous avez
                {{ $demandes->where('to', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} demande(s)</a>
        @elseif (auth()->user()->role_id == 1)
            <a class='btn btn-dark' href='{{ route('messages.index') }}' role='button'>Vous avez
                {{ $messages->where('to', '==', auth()->user()->email)->count() }} message(s)</a>
            <a class='btn btn-danger mt-3' href='{{ route('demandes.index') }}' role='button'>Vous avez
                {{ $demandes->where('from', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} demande(s)</a>
            <a class='btn btn-primary mt-3' href='{{ route('contactforms.index') }}' role='button'>Vous avez
                {{ $contactforms->where('to', '==', auth()->user()->role->name)->count() }} contact request(s)</a>
        @elseif (auth()->user()->role_id == 4)
            <a class='btn btn-dark' href='{{ route('messages.index') }}' role='button'>Vous avez
                {{ $messages->where('to', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} message(s)</a>
            <a class='btn btn-danger mt-3' href='{{ route('demandes.index') }}' role='button'>Vous avez
                {{ $demandes->where('from', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} demande(s)</a>
        @elseif (auth()->user()->role_id == 3)
            <a class='btn btn-dark' href='{{ route('messages.index') }}' role='button'>Vous avez
                {{ $messages->where('to', '==', auth()->user()->name || 'to', '==', auth()->user()->email)->count() }} message(s)</a>
        @endif
    </section>
@endsection
