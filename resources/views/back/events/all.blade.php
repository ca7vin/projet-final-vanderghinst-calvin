@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Events</h1>
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
        <a class='btn btn-success' href='{{ route('event.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>start_time</th>
                    <th scope='col'>end_time</th>
                    <th scope='col'>title</th>
                    <th scope='col'>description</th>
                    <th scope='col'>image1</th>
                    <th scope='col'>image2</th>
                    <th scope='col'>image3</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>email</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th scope='row'>{{ $event->id }}</th>
                        <td>{{ $event->start_time }}</td>
                        <td>{{ $event->end_time }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{{ $event->description }}</td>
                        <td>{{ $event->image1 }}</td>
                        <td>{{ $event->image2 }}</td>
                        <td>{{ $event->image3 }}</td>
                        <td>{{ $event->phone }}</td>
                        <td>{{ $event->email }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('event.destroy', $event->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('event.edit', $event->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('event.read', $event->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
