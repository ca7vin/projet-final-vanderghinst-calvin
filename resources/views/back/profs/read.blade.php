@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase' scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>name</th>
                    <th class='text-uppercase' scope='col'>subject</th>
                    <th class='text-uppercase' scope='col'>bio_short</th>
                    <th class='text-uppercase' scope='col'>bio_long</th>
                    <th class='text-uppercase' scope='col'>phone</th>
                    <th class='text-uppercase' scope='col'>skype</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $prof->id }}</th>
                    <td>{{ $prof->user->name }}</td>
                    <td>{{ $prof->subject }}</td>
                    <td>{!! (Str::words($prof->bio_short, '12')) !!}</td>
                    <td>{!! (Str::words($prof->bio_long, '12')) !!}</td>
                    <td>{{ $prof->phone }}</td>
                    <td>{{ $prof->skype }}</td>
                    <td class='d-flex align-items-center justify-content-around'> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                        <a class='btn btn-warning mx-3' href='{{ route('prof.edit', $prof->id) }}'
                            role='button'>Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
