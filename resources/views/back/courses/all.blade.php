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
            @can('create', App\Models\Course::class)
                <a class='btn btn-success' href='{{ route('courses.create') }}' role='button'>Create</a>
            @endcan
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
                        <th class="text-uppercase" scope='col'>students</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @if (Auth::user()->role_id == 1)
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
                                            <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>
                                                {{ $categorie->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($course->users as $user)
                                            <li style='background-color: #5f5f5f !important; font-size: 8px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>
                                                {{ $user->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td> {{-- all_td_anchor --}}
                                    @can('delete', $course)
                                        <form action='{{ route('courses.destroy', $course->id) }}' method='post'>
                                            @csrf
                                            @method('DELETE')
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $course)
                                        <a class='btn btn-dark' href='{{ route('courses.edit', $course->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('courses.show', $course->id) }}'
                                        role='button'>Read</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if (auth()->user()->role_id == 2)
                        @foreach ($courses->where('prof_id', '==', auth()->user()->prof_id) as $course)
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
                                            <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>
                                                {{ $categorie->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($course->users as $user)
                                            <li style='background-color: #5f5f5f !important; font-size: 8px !important;'
                                                class='text-center text-white p-1 m-1 rounded-pill'>
                                                {{ $user->name }}
                                            </li>
                                        @endforeach
                                    </ul>
                                </td>
                                <td> {{-- all_td_anchor --}}
                                    @can('delete', $course)
                                        <form action='{{ route('courses.destroy', $course->id) }}' method='post'>
                                            @csrf
                                            @method('DELETE')
                                            <button class='btn btn-danger' type=submit>Delete</button>
                                        </form>
                                    @endcan
                                </td>
                                <td>
                                    @can('update', $course)
                                        <a class='btn btn-dark' href='{{ route('courses.edit', $course->id) }}'
                                            role='button'>Edit</a>
                                    @endcan
                                </td>
                                <td>
                                    <a class='btn btn-dark' href='{{ route('courses.show', $course->id) }}'
                                        role='button'>Read</a>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                    @if (auth()->user()->role_id == 4)
                        @foreach (auth()->user()->courses as $course)
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
                                                <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                                    class='text-center text-white p-1 m-1 rounded-pill'>
                                                    {{ $categorie->name }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <ul>
                                            @foreach ($course->users as $user)
                                                <li style='background-color: #5f5f5f !important; font-size: 8px !important;'
                                                    class='text-center text-white p-1 m-1 rounded-pill'>
                                                    {{ $user->name }}
                                                </li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td> {{-- all_td_anchor --}}
                                        @can('delete', $course)
                                            <form action='{{ route('courses.destroy', $course->id) }}' method='post'>
                                                @csrf
                                                @method('DELETE')
                                                <button class='btn btn-danger' type=submit>Delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                    <td>
                                        @can('update', $course)
                                            <a class='btn btn-dark' href='{{ route('courses.edit', $course->id) }}'
                                                role='button'>Edit</a>
                                        @endcan
                                    </td>
                                    <td>
                                        <a class='btn btn-dark' href='{{ route('courses.show', $course->id) }}'
                                            role='button'>Read</a>
                                    </td>
                                </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </section>
@endsection
