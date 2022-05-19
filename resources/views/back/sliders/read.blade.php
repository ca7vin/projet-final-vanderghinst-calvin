@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Sliders</div>
            <table class='table'>
                <thead>
                    <tr>
                        <th class="text-uppercase" scope='col'>#</th>
                        <th class="text-uppercase" scope='col'>first</th>
                        <th class="text-uppercase" scope='col'>image</th>
                        <th class="text-uppercase" scope='col'>title</th>
                        <th class="text-uppercase" scope='col'>text</th>
                        <th class="text-uppercase" scope='col'>textorange</th>
                        <th class="text-uppercase" scope='col'>btntext</th>
                        <th class="text-uppercase" scope='col'>btnlink</th>
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
    </section>
@endsection
