@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">News</div>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase' scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>title</th>
                    <th class='text-uppercase' scope='col'>text</th>
                    <th class='text-uppercase' scope='col'>quote</th>
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
    </section>
@endsection
