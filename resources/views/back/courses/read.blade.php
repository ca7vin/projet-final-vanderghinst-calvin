@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Courses</div>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase' scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>prof</th>
                    <th class='text-uppercase' scope='col'>title</th>
                    <th class='text-uppercase' scope='col'>description</th>
                    <th class='text-uppercase' scope='col'>discipline</th>
                    <th class='text-uppercase' scope='col'>price</th>
                    <th class='text-uppercase' scope='col'>level</th>
                    <th class='text-uppercase' scope='col'>start</th>
                    <th class='text-uppercase' scope='col'>duration</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $course->id }}</th>
                    <td>{{ $course->prof }}</td>
                    <td>{{ $course->title }}</td>
                    <td>{{ $course->description }}</td>
                    <td>{{ $course->discipline }}</td>
                    <td>{{ $course->price }}</td>
                    <td>{{ $course->level }}</td>
                    <td>{{ $course->start }}</td>
                    <td>{{ $course->duration }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('course.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
