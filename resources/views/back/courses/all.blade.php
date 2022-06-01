@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Courses</div>
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
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'><i class='bx bxs-star'></i>
                        </th>
                        <th class="text-uppercase col-1" scope='col'>image</th>
                        <th class="text-uppercase" scope='col'>status</th>
                        <th class="text-uppercase" scope='col'>prof</th>
                        <th class="text-uppercase" scope='col'>title</th>
                        <th class="text-uppercase" scope='col'>description</th>
                        <th class="text-uppercase" scope='col'>discipline</th>
                        <th class="text-uppercase" scope='col'>price</th>
                        <th class="text-uppercase" scope='col'>level</th>
                        <th class="text-uppercase" scope='col'>start</th>
                        <th class="text-uppercase" scope='col'>duration</th>
                        <th class="text-uppercase" scope='col'>category</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($courses as $course)
                        <tr>
                            <th scope='row'>{{ $course->id }}</th>
                            <td>
                                @if ($course->favori == 1)
                                    <i style='color:rgb(250, 229, 0) !important;' class='bx bxs-star'></i>
                                @else
                                    <i class='bx bx-star'></i>
                                @endif
                                </a>
                            </td>
                            <td>
                                <img src="{{ asset('images/' . $course->image) }}" alt="">
                            </td>
                            <td>
                                @if ($course->status == 1)
                                    <span class='text-success'>accepted</span>
                                @else
                                    <span class='text-danger'>pending</span>
                                @endif
                            </td>
                            <td>
                                @if ($course->prof)
                                    {{ $course->prof->user->name }}
                                @else
                                    Administrateur
                                @endif
                            </td>
                            <td>{{ $course->title }}</td>
                            <td>{!! Str::words($course->description, '12') !!}</td>
                            <td>{{ $course->discipline }}</td>
                            <td>{{ $course->price }}</td>
                            <td>{{ $course->level }}</td>
                            <td>{{ $course->start }}</td>
                            <td>{{ $course->duration }}</td>
                            <td>
                                <ul>
                                    @foreach ($course->categories as $categorie)
                                        <li>{{ $categorie->name }}</li>
                                    @endforeach
                                </ul>
                            </td>
                            <td> {{-- all_td_anchor --}}
                                <div class='d-flex'>
                                    <form action='{{ route('course.destroy', $course->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                    <a class='btn btn-primary mx-3' href='{{ route('course.edit', $course->id) }}'
                                        role='button'>Edit</a>
                                    <a class='btn btn-primary' href='{{ route('course.read', $course->id) }}'
                                        role='button'>Read</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
