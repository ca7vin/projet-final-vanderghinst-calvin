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
        <form action='{{ route('commentaire.update' , $commentaire->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>user</label>
                <input type='text' name='user' value='{{ $commentaire->user }}'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content' value='{{ $commentaire->content }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
