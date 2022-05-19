@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Icons</h1>
        @if (session()->has('message'))
            <div class='alert alert-success'>
                {{ session()->get('message') }}
            </div>
        @endif
        @if ($errors->any())
            <div class='alert alert-danger'>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>name</th>
                    <th scope='col'>icon</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($icons as $icon)
                    <tr>
                        <th scope='row'>{{ $icon->id }}</th>
                        <td>{{ $icon->name }}</td>
                        <td>{{ $icon->icon }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
