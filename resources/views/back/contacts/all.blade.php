@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Contact</div>
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
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>adress</th>
                    <th class='text-uppercase' scope='col'>phone</th>
                    <th class='text-uppercase' scope='col'>mail</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                    <tr>
                        <th scope='row'>{{ $contact->id }}</th>
                        <td>{{ $contact->adress }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->mail }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <a class='btn btn-primary' href='{{ route('contact.edit', $contact->id) }}' role='button'>Edit</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
