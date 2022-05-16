@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Services</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('service.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>icon</label>
                <input type='text' name='icon'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
