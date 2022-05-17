@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Profs</h1>
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
        <a class='btn btn-success' href='{{ route('prof.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>subject</th>
                    <th scope='col'>bio_short</th>
                    <th scope='col'>bio_long</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>skype</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($profs as $prof)
                    <tr>
                        <th scope='row'>{{ $prof->id }}</th>
                        <td>{{ $prof->subject }}</td>
                        <td>{{ $prof->bio_short }}</td>
                        <td>{{ $prof->bio_long }}</td>
                        <td>{{ $prof->phone }}</td>
                        <td>{{ $prof->skype }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('prof.destroy', $prof->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('prof.edit', $prof->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('prof.read', $prof->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
