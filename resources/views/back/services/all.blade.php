@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Services</h1>
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
        <a class='btn btn-success' href='{{ route('service.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>icon</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($services as $service)
                    <tr>
                        <th scope='row'>{{ $service->id }}</th>
                        <td>{{ $service->icon }}</td>
                        <td>{{ $service->title }}</td>
                        <td>{{ $service->text }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('service.edit', $service->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('service.read', $service->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
