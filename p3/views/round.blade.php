@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

<h2>Round Details</h2>

<ul>
    <li>Player move: {{ $round['move']}}</li>
    <li>Computer move: {{ $round['compMove']}}</li>
    <li>Result: {{ $round['result']}}</li>
    <li>Time played: {{ $round['time']}}</li>
</ul>

@endsection
