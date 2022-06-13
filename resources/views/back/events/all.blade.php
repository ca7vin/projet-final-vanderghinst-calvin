@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Events</div>
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
            @can('create', App\Event::class)
                <a class='btn btn-success' href='{{ route('events.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase col-1' scope='col'>image1</th>
                        <th class='text-uppercase ' scope='col'>start</th>
                        <th class='text-uppercase ' scope='col'>end</th>
                        <th class='text-uppercase' scope='col'>title</th>
                        <th class='text-uppercase col-2' scope='col'>description</th>
                        <th class='text-uppercase' scope='col'>phone</th>
                        <th class='text-uppercase' scope='col'>email</th>
                        <th class='text-uppercase col-1' scope='col'>categories</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <th scope='row'>{{ $event->id }}</th>
                            <td>
                                <img src="{{ asset('images/' . $event->image1) }}" alt="">
                            </td>
                            <td>{{ $event->start_time }}</td>
                            <td>{{ $event->end_time }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ Illuminate\Support\Str::limit($event->description, 40) }}</td>
                            {{-- <td>
                            <img src="{{ asset('images/' . $event->image2) }}" alt="">
                        </td> --}}
                            {{-- <td>
                            <img src="{{ asset('images/' . $event->image3) }}" alt="">
                        </td> --}}
                            <td>{{ $event->phone }}</td>
                            <td>{{ $event->email }}</td>
                            <td>
                                <ul>
                                    @foreach ($event->categories as $categorie)
                                        <li style='background-color: #A12C2F !important; font-size: 10px !important;'
                                            class='text-center text-white p-1 m-1 rounded-pill'>{{ $categorie->name }}
                                        </li>
                                    @endforeach
                                </ul>
                            </td>
                            <td> {{-- all_td_anchor --}}
                                @can('delete', $event)
                                    <form action='{{ route('events.destroy', $event->id) }}' method='post'>
                                        @csrf
                                        @method('DELETE')
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td>
                                @can('update', $event)
                                    <a class='btn btn-dark' href='{{ route('events.edit', $event->id) }}'
                                        role='button'>Edit</a>
                                @endcan
                            </td>
                            <td>
                                <a class='btn btn-dark' href='{{ route('events.show', $event->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
