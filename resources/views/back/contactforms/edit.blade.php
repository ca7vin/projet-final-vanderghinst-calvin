@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>ContactForms</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('contactform.update' , $contactform->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>from</label>
                <input type='text' name='from' value='{{ $contactform->from }}'>
            </div>
            <div>
                <label for=''>to</label>
                <input type='text' name='to' value='{{ $contactform->to }}'>
            </div>
            <div>
                <label for=''>content</label>
                <input type='text' name='content' value='{{ $contactform->content }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
