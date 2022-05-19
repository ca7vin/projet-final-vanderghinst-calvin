@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Teachers</div>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>subject</th>
                    <th scope='col'>bio_short</th>
                    <th scope='col'>bio_long</th>
                    <th scope='col'>phone</th>
                    <th scope='col'>skype</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $prof->id }}</th>
                    <td>{{ $prof->subject }}</td>
                    <td>{{ $prof->bio_short }}</td>
                    <td>{{ $prof->bio_long }}</td>
                    <td>{{ $prof->phone }}</td>
                    <td>{{ $prof->skype }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('prof.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
