@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Messages</div>
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
                    <th scope='col'>Read ?</th>
                    <th scope='col'>from</th>
                    <th scope='col'>to</th>
                    <th scope='col'>content</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($messages->where('to','==', auth()->user()->email) as $message)
                    <tr>
                        <th scope='row'>{{ $message->id }}</th>
                        <td>
                            @if ($message->read == false)
                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                            @elseif ($message->read == true)
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            @endif
                        </td>
                        <td>{{ $message->from }}</td>
                        <td>{{ $message->to }}</td>
                        <td>{{ $message->content }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('message.destroy', $message->id) }}' method='post'>
                                    @csrf
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-dark' href='{{ route('message.reply', $message->id) }}' role='button'>Reply</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
