@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Commentaires</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('commentaire.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>user</label>
                <input type='text' name='user'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
