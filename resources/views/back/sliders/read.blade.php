@extends('back.layouts.app')
@section('content')
    <div class='container'>
        <h1 class='my-5'>Sliders</h1>
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
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $slider->id }}</th>
                    <td>{{ $slider->first }}</td>
                    <td>{{ $slider->image }}</td>
                    <td>{{ $slider->title }}</td>
                    <td>{{ $slider->text }}</td>
                    <td>{{ $slider->textorange }}</td>
                    <td>{{ $slider->btntext }}</td>
                    <td>{{ $slider->btnlink }}</td>
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('slider.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
