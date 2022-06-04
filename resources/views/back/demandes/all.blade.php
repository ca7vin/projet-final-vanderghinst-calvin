@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Rendez-vous</div>
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
            @if (auth()->user()->role_id == 1 || auth()->user()->role_id == 2)
                <a class='btn btn-success' href='{{ route('demande.create') }}' role='button'>Create</a>
            @endif
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th class='text-uppercase' scope='col'>status</th>
                        <th class='text-uppercase' scope='col'>date</th>
                        <th class='text-uppercase' scope='col'>from</th>
                        <th class='text-uppercase' scope='col'>to</th>
                        <th class='text-uppercase' scope='col'>content</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @if (auth()->user()->prof)
                        @foreach ($demandes->where('to', '==', auth()->user()->name) as $demande)
                            <tr>
                                <th scope='row'>{{ $demande->id }}</th>
                                <td>
                                    @if ($demande->status == false)
                                        <span class='text-danger'>Pending</span>
                                    @elseif ($demande->status == true)
                                        <span class='text-success'>Accepted</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($demande->date == null)
                                        <span class='text-danger'>Pending</span>
                                    @else
                                        {{ $demande->date }}
                                    @endif
                                </td>
                                <td>{{ $demande->from }}</td>
                                <td>{{ $demande->to }}</td>
                                <td>{{ $demande->content }}</td>
                                <td> {{-- all_td_anchor --}}
                                    <div class='d-flex'>
                                        <form action='{{ route('demande.destroy', $demande->id) }}' method='post'>
                                            @csrf
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                        <a class='btn btn-dark mx-3' href='{{ route('demande.edit', $demande->id) }}'
                                            role='button'>Edit</a>
                                        <a class='btn btn-dark' href='{{ route('demande.read', $demande->id) }}'
                                            role='button'>Read</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @elseif (auth()->user())
                        @foreach ($demandes->where('from', '==', auth()->user()->name) as $demande)
                            <tr>
                                <th scope='row'>{{ $demande->id }}</th>
                                <td>
                                    @if ($demande->status == false)
                                        <span class='text-danger'>Pending</span>
                                    @elseif ($demande->status == true)
                                        <span class='text-success'>Accepted</span>
                                    @endif
                                </td>
                                <td>
                                    @if ($demande->date == null)
                                        <span class='text-danger'>Pending</span>
                                    @else
                                        {{ $demande->date }}
                                    @endif
                                </td>
                                <td>{{ $demande->from }}</td>
                                <td>{{ $demande->to }}</td>
                                <td>{{ $demande->content }}</td>
                                <td> {{-- all_td_anchor --}}
                                    <form action='{{ route('demande.destroy', $demande->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('demande.read', $demande->id) }}'
                                        role='button'>Read</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    @endsection
