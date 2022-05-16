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
        <form action='{{ route('slider.update' , $slider->id) }}' method='post'>
            @csrf
            <div>
                <label for=''>first</label>
                <input type='text' name='first' value='{{ $slider->first }}'>
            </div>
            <div>
                <label for=''>image</label>
                <input type='text' name='image' value='{{ $slider->image }}'>
            </div>
            <div>
                <label for=''>title</label>
                <input type='text' name='title' value='{{ $slider->title }}'>
            </div>
            <div>
                <label for=''>text</label>
                <input type='text' name='text' value='{{ $slider->text }}'>
            </div>
            <div>
                <label for=''>textorange</label>
                <input type='text' name='textorange' value='{{ $slider->textorange }}'>
            </div>
            <div>
                <label for=''>btntext</label>
                <input type='text' name='btntext' value='{{ $slider->btntext }}'>
            </div>
            <div>
                <label for=''>btnlink</label>
                <input type='text' name='btnlink' value='{{ $slider->btnlink }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
