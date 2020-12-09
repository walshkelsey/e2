@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

<h2>Game History</h2>

<ul>
    @foreach($rounds as $round)
    <li><a href='/round?id={{ $round['id'] }}'>{{ $round['time'] }}</a>
        @endforeach
</ul>

@endsection
