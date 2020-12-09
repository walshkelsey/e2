@extends('templates.master')

@section('title')
Rock Paper Scissors
@endsection

@section('content')

<div>
    <h2>How to Play</h2>
    <ul>
        <li>Choose a move: rock, paper or scissors.</li>
        <li>The computer will also choose a move.</li>
        <li>Paper beats rock, rock beats scissors, and scissors beats paper.</li>
        <li>If you and the computer chose the same move, it's a tie.</li>
    </ul>
</div>


<form method='POST' action=/play>
    <div>
        <h3>Choose your move:</h3>
        <label>
            <input type='radio' name='move' id='rock' value='rock'>
            Rock</label>

        <label>
            <input type='radio' name='move' id='paper' value='paper'>
            Paper</label>

        <label>
            <input type='radio' name='move' id='scissors' value='scissors'>
            Scissors</label>

        <button type='submit'>Play!</button>
</form>

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{'You must select a move in order to play!'}}</li>
    @endforeach
</ul>
@endif

</div>

@if($outcome)
<div>
    <h3>Game Results</h3>
    <ul>
        <li>You chose {{$outcome['move']}}</li>
        <li>The computer chose {{$outcome['compMove']}}</li>
        <li>{{$outcome['result']}}</li>
    </ul>
</div>
@endif
<br>
<h2><a href='/history'>Game History!</a></h2>


@endsection
