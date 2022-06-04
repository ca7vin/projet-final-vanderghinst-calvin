@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Commentaires</div>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>Action</th>
                        <th scope='col'>user</th>
                        <th scope='col'>content</th>
                    </tr> {{-- read_tr_anchor --}}
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>{{ $commentaire->id }}</th>
                        <td>{{ $commentaire->user->name }}</td>
                        <td>{{ $commentaire->content }}</td>
                        <td> {{-- read_td_anchor --}}
                            <a class='btn btn-primary' href='{{ route('commentaire.index') }}' role='button'>Back</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    @endsection
