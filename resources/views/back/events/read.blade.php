@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Events</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
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
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('event.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
