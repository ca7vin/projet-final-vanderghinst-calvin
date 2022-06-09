@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Contact Forms</div>
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
            {{-- <a class='btn btn-success' href='{{ route('contactform.create') }}' role='button'>Create</a> --}}
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase' scope='col'>from</th>
                        <th class='text-uppercase' scope='col'>to</th>
                        <th class='text-uppercase' scope='col'>content</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($contactforms as $contactform)
                        <tr>
                            <th scope='row'>{{ $contactform->id }}</th>
                            <td>{{ $contactform->from }}</td>
                            <td>{{ $contactform->to }}</td>
                            <td>{{ $contactform->content }}</td>
                            <td> {{-- all_td_anchor --}}
                                <form action='{{ route('contactforms.destroy', $contactform->id) }}' method='post'>
                                    @csrf
                                    @method('DELETE')
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                            </td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('contactform.reply', $contactform->id) }}'
                                    role='button'>Reply</a>
                            </td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('contactforms.show', $contactform->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
