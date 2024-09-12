@extends('layout.main')


@section('content')
@dump($trains)
<table class="table">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Company</th>
        <th scope="col">Departure</th>
        <th scope="col">Arrival</th>
        <th scope="col">Time departure</th>
        <th scope="col">Time arrival</th>
        <th scope="col">Train code</th>
        <th scope="col">Number carriages</th>
        <th scope="col">on time</th>
        <th scope="col">cancelled</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($trains as $train)
            <tr>

                <td scope="row">{{$train->id}}</td>
                <td scope="row">{{$train->company}}</td>
                <td scope="row">{{$train->departure_station}}</td>
                <td scope="row">{{$train->arrival_station}}</td>
                <td scope="row">{{$train->departure_time}}</td>
                <td scope="row">{{$train->arrival_time}}</td>
                <td scope="row">{{$train->train_code}}</td>
                <td scope="row">{{$train->number_carriages}}</td>
                <td scope="row">{{$train->on_time}}</td>
                <td scope="row">{{$train->cancelled}}</td>

            </tr>
        @endforeach

    </tbody>
  </table>
@endsection
