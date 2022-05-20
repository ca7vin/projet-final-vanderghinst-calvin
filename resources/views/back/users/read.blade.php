@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Users</div>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>icon</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $user->id }}</th>
                    {{-- <td>
                        {{ $service->icon }}
                    </td> --}}
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('user.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </section>
@endsection
