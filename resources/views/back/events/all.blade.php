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
        <a class='btn btn-success' href='{{ route('event.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th class='text-uppercase' scope='col'>#</th>
                    <th class='text-uppercase' scope='col'>start time</th>
                    <th class='text-uppercase' scope='col'>end time</th>
                    <th class='text-uppercase' scope='col'>title</th>
                    <th class='text-uppercase' scope='col'>description</th>
                    <th class='text-uppercase' scope='col'>image1</th>
                    <th class='text-uppercase' scope='col'>image2</th>
                    <th class='text-uppercase' scope='col'>image3</th>
                    <th class='text-uppercase' scope='col'>phone</th>
                    <th class='text-uppercase' scope='col'>email</th>
                    <th class='text-uppercase' scope='col'>categories</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <th scope='row'>{{ $event->id }}</th>
                        <td>{{ $event->start_time }}</td>
                        <td>{{ $event->end_time }}</td>
                        <td>{{ $event->title }}</td>
                        <td>{!! (Str::words($event->description, '12')) !!}</td>
                        <td>
                            <img src="{{ asset('images/' . $event->image1) }}" alt="">
                        </td>
                        <td>
                            <img src="{{ asset('images/' . $event->image2) }}" alt="">
                        </td>
                        <td>
                            <img src="{{ asset('images/' . $event->image3) }}" alt="">
                        </td>
                        <td>{{ $event->phone }}</td>
                        <td>{{ $event->email }}</td>
                        <td>
                            <ul>
                                @foreach ($event->categories as $categorie)
                                    <li>{{ $categorie->name }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('event.destroy', $event->id) }}' method='post'>
                                    @csrf
                                    <button class='btn btn-danger' type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary mx-3' href='{{ route('event.edit', $event->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('event.read', $event->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </section>
@endsection
