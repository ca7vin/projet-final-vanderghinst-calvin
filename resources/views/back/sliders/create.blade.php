@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Sliders</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('slider.store') }}' method='post'>
            @csrf
            <div>
                <label for=''>first</label>
                <input type='text' name='first'>
            </div>
            <div>
                <label for=''>image</label>
                <input type='text' name='image'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text'>
            </div>
            <div>
                <label for=''>textorange</label>
                <input type='text' name='textorange'>
            </div>
            <div>
                <label for=''>btntext</label>
                <input type='text' name='btntext'>
            </div>
            <div>
                <label for=''>btnlink</label>
                <input type='text' name='btnlink'>
            </div>
            <button type='submit'>Create</button> {{-- create_blade_anchor --}} 
        </form>
    </div>
@endsection
