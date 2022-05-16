@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Sliders</h1>
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
        <a class='btn btn-success' href='{{ route('slider.create') }}' role='button'>Create</a>
        <table class='table'>
            <thead>
                <tr>
                    <th scope='col'>#</th>
                    <th scope='col'>Action</th>
                    <th scope='col'>first</th>
                    <th scope='col'>image</th>
                    <th scope='col'>title</th>
                    <th scope='col'>text</th>
                    <th scope='col'>textorange</th>
                    <th scope='col'>btntext</th>
                    <th scope='col'>btnlink</th>
                </tr> {{-- all_tr_anchor --}}
            </thead>
            <tbody>
                @foreach ($sliders as $slider)
                    <tr>
                        <th scope='row'>{{ $slider->id }}</th>
                        <td>{{ $slider->first }}</td>
                        <td>{{ $slider->image }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->text }}</td>
                        <td>{{ $slider->textorange }}</td>
                        <td>{{ $slider->btntext }}</td>
                        <td>{{ $slider->btnlink }}</td>
                        <td> {{-- all_td_anchor --}}
                            <div class='d-flex'>
                                <form action='{{ route('slider.destroy', $slider->id) }}' method='post'>
                                    @csrf
                                    <button class=btn btn-danger type=submit>Delete</button>
                                </form>
                                <a class='btn btn-primary' href='{{ route('slider.edit', $slider->id) }}' role='button'>Edit</a>
                                <a class='btn btn-primary' href='{{ route('slider.read', $slider->id) }}' role='button'>Read</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
