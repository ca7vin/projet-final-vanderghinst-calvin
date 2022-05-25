@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Tags</div>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="d-flex flex-column align-items-center justify-content-center"  action='{{ route('tag.update' , $tag->id) }}' method='post'>
            @csrf
            <div class="d-flex flex-column align-items-center justify-content-center mb-3" >
                <label for=''>name</label>
                <input type='text' name='name' value='{{ $tag->name }}'>
            </div>
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
