@extends('layout.main')

@section('content')
<h1>Vacanza programmata</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">Luogo</th>
        <th scope="col">Compagnia</th>
        <th scope="col">Partenza</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($travels as $travel)
            <tr>

                <td scope="row">{{$travel->place}}</td>
                <td scope="row">{{$travel->description}}</td>
                <td scope="row">{{$travel->weather}}</td>


            </tr>
        @endforeach

    </tbody>
  </table>
@endsection
