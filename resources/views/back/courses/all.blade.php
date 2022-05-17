@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Courses</h1>
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
        <a class='btn btn-success' href='{{ route('course.create') }}' role='button'>Create</a>
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
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($courses as $course)
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
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('course.destroy', $course->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('course.edit', $course->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('course.read', $course->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
