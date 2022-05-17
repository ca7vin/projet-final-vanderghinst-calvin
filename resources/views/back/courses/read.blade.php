@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Courses</h1>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>prof</th>
                    <th scope='col'>title</th>
                    <th scope='col'>description</th>
                    <th scope='col'>discipline</th>
                    <th scope='col'>price</th>
                    <th scope='col'>level</th>
                    <th scope='col'>start</th>
                    <th scope='col'>duration</th>
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
@endsection
