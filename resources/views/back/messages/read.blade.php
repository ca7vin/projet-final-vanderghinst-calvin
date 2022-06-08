@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Messages</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>from</th>
                    <th scope='col'>to</th>
                    <th scope='col'>content</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $message->id }}</th>
                    <td>{{ $message->from }}</td>
                    <td>{{ $message->to }}</td>
                    <td>{{ $message->content }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('messages.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
