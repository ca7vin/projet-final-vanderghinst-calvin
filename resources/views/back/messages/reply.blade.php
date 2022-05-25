@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Answer</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class='d-flex flex-column align-items-center justify-content-center' action='{{ route('message.store') }}' method='post'>
            @csrf
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase" for=''>from</label>
                <input type='text' name='from' value='{{ $message->to }}'>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase" for=''>to</label>
                <input type='text' name='to' value='{{ $message->from }}'>
            </div>
            <div class="d-flex flex-column align-items-center justify-content-center mb-3">
                <label class="text-uppercase" for=''>content</label>
                <textarea cols="25" rows="10" type='text' name='content' value=''></textarea>
            </div>
            <button class='btn btn-dark' type='submit'>Answer</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
