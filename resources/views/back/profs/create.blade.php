@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Profs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('prof.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>subject</label>
                <input type='text' name='subject'>
            </div>
            <div>
                <label for=''>bio_short</label>
                <input type='text' name='bio_short'>
            </div>
            <div>
                <label for=''>bio_long</label>
                <input type='text' name='bio_long'>
            </div>
            <div>
                <label for=''>phone</label>
                <input type='text' name='phone'>
            </div>
            <div>
                <label for=''>skype</label>
                <input type='text' name='skype'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
