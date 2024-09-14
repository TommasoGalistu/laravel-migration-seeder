@extends('layout.main')
@php
    $list = [];
    foreach($team as $player){

        if(!in_array($player, $list)){
            $list[] = $player;
        }
    }



@endphp
@section('content')
<h1>Fantacalcio</h1>
<h5>Clicca sul tuo giocatore</h5>

@foreach ($list as $player)
@php
    $player_url = str_replace(' ', '-', $player);
@endphp
<a class="player" href="{{route('fanta', ['name' => $player_url ])}}">{{ $player }}</a>


@endforeach
<table class="table">

    <h5 class="nome">Allenatore: {{ $player_search  }}</h5>
    <thead>
      <tr>
        <th scope="col">Giocatore</th>
        <th scope="col">Squadra</th>
        <th scope="col">Posizione</th>
        <th scope="col">Prezzo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($firstTeam as $row)
        <tr>
            <td>{{ $row->player }}</td>
            <td>{{ $row->player_team }}</td>
            <td>{{ $row->position }}</td>
            <td>{{ $row->price }}</td>

        </tr>
        @endforeach

    </tbody>
  </table>
@endsection
