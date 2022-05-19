@extends('back.layouts.app')
@section('content')
    @include('back/partials/sidebar')
    <section class="home-section p-0">
        <div class='container d-flex flex-column align-items-center justify-content-center'>
            <div class="text">Events</div>
        <table class='table'>
            <thead>
                <tr>
                    <th class="text-uppercase" scope='col'>#</th>
                    <th class="text-uppercase" scope='col'>start time</th>
                    <th class="text-uppercase" scope='col'>end time</th>
                    <th class="text-uppercase" scope='col'>title</th>
                    <th class="text-uppercase" scope='col'>description</th>
                    <th class="text-uppercase" scope='col'>image1</th>
                    <th class="text-uppercase" scope='col'>image2</th>
                    <th class="text-uppercase" scope='col'>image3</th>
                    <th class="text-uppercase" scope='col'>phone</th>
                    <th class="text-uppercase" scope='col'>email</th>
                </tr> {{-- read_tr_anchor --}}
            </thead>
            <tbody>
                <tr>
                    <th scope='row'>{{ $event->id }}</th>
                    <td>{{ $event->start_time }}</td>
                    <td>{{ $event->end_time }}</td>
                    <td>{{ $event->title }}</td>
                    <td>{{ $event->description }}</td>
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
                    <td> {{-- read_td_anchor --}}
                        <a class='btn btn-primary' href='{{ route('event.index') }}' role='button'>Back</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
@endsection
