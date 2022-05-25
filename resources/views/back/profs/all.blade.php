@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
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
                    <th scope='col'>subject</th>
                    <th scope='col'>bio short</th>
                    <th scope='col'>bio long</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>skype</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($profs as $prof)
                    <tr>
                        <th scope='row'>{{ $prof->id }}</th>
                        <td>{{ $prof->subject }}</td>
                        <td>{!! (Str::words($prof->bio_short, '12')) !!}</td>
                        <td>{!! (Str::words($prof->bio_long, '12')) !!}</td>
                        <td>{{ $prof->phone }}</td>
                        <td>{{ $prof->skype }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('prof.destroy', $prof->id) }}' method='post'>
                                    @csrf
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-3' href='{{ route('prof.edit', $prof->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('prof.read', $prof->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection
