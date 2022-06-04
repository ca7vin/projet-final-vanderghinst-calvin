@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Emails</div>
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
            @can('create', App\Email::class)
                <a class='btn btn-success' href='{{ route('email.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>email</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($emails as $email)
                        <tr>
                            <th scope='row'>{{ $email->id }}</th>
                            <td>{{ $email->email }}</td>
                            <td> {{-- all_td_anchor --}}
                                @can('delete', $email)
                                    <form action='{{ route('email.destroy', $email->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('email.read', $email->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
