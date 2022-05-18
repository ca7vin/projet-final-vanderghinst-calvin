@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Posts</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                    <th scope='col'>quote</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $post->id }}</th>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->text }}</td>
                    <td>{{ $post->quote }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('post.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
