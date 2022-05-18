@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1>Redacteurs</h1>
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action='{{ route('redacteur.update' , $redacteur->id) }}' method='post'>
            @csrf
            <button type='submit'>Update</button> {{-- update_blade_anchor --}}
        </form>
    </div>
@endsection
