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
        <form action='{{ route('service.update' , $service->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>icon</label>
                <input type='text' name='icon' value='{{ $service->icon }}'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $service->title }}'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text' value='{{ $service->text }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
