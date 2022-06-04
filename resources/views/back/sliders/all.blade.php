@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Sliders</div>
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
            @can('create', App\Slider::class)
                <a class='btn btn-success' href='{{ route('slider.create') }}' role='button'>Create</a>
            @endcan
            <table class='table'>
                <thead>
                    <tr>
                        <th class='text-uppercase' scope='col'>#</th>
                        <th class='text-uppercase' scope='col'>first</th>
                        <th class='text-uppercase col-2' scope='col'>image</th>
                        <th class='text-uppercase' scope='col'>title</th>
                        <th class='text-uppercase' scope='col'>text</th>
                        <th class='text-uppercase' scope='col'>textorange</th>
                        <th class='text-uppercase' scope='col'>btntext</th>
                        <th class='text-uppercase' scope='col'>btnlink</th>
                    </tr> {{-- all_tr_anchor --}}
                </thead>
                <tbody>
                    @foreach ($sliders as $slider)
                        <tr>
                            <th scope='row'>{{ $slider->id }}</th>
                            <td>
                                @if ($slider->first == 1)
                                    <i class='bx bxs-check-square'></i>
                                @else
                                    <i class='bx bxs-no-entry'></i>
                                @endif
                            </td>
                            <td>
                                <img src="{{ asset('images/' . $slider->image) }}" alt="">
                            </td>
                            <td>{!! $slider->title !!}</td>
                            <td>{!! $slider->text !!}</td>
                            <td>{{ $slider->textorange }}</td>
                            <td>{{ $slider->btntext }}</td>
                            <td>{{ $slider->btnlink }}</td>
                            <td> {{-- all_td_anchor --}}
                                @can('delete', $slider)
                                    <form action='{{ route('slider.destroy', $slider->id) }}' method='post'>
                                        @csrf
                                        <button class='btn btn-danger' type=submit>Delete</button>
                                    </form>
                                @endcan
                            </td>
                            <td>
                                @can('delete', $slider)
                                    <a class='btn btn-primary' href='{{ route('slider.edit', $slider->id) }}'
                                        role='button'>Edit</a>
                                @endcan
                            </td>
                            <td>
                                <a class='btn btn-primary' href='{{ route('slider.read', $slider->id) }}'
                                    role='button'>Read</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
