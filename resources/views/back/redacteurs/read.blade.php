@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Redacteurs</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $redacteur->id }}</th>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('redacteur.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
