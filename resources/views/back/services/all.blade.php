@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Services</div>
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
            @can('create', App\Service::class)
                <a class='btn btn-success' href='{{ route('service.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>#</th>
                        <th scope='col'>icon</th>
                        <th scope='col'>title</th>
                        <th scope='col'>text</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <th scope='row'>{{ $service->id }}</th>
                            <td>{!! $service->icon !!}</td>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->text }}</td>
                            <td> {{-- all_td_anchor --}}
                                @can('delete', $service)
                                    <form action='{{ route('service.destroy', $service->id) }}' method='post'>
                                        @csrf
                                        <button class="btn btn-danger" type=submit>Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td>
                                @can('update', $service)
                                    <a class='btn btn-dark' href='{{ route('service.edit', $service->id) }}'
                                        role='button'>Edit</a>
                                @endcan
                            </td>
                            <td>
                                <a class='btn btn-dark' href='{{ route('service.read', $service->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
