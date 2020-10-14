<?php

session_start();



$move =$_GET['move'];

$choices = ['rock', 'paper', 'scissors'];

$comp_move = $choices[rand(0, 2)];


if ($move =='rock' and $comp_move=='paper') {
    $result ='Computer wins :(';
} elseif ($move =='rock' and $comp_move=='scissors') {
    $result ='You win!';
} elseif ($move =='rock' and $comp_move=='rock') {
    $result = 'Tis a tie!';
} elseif ($move =='paper' and $comp_move=='rock') {
    $result ='You win!';
} elseif ($move =='paper' and $comp_move=='scissors') {
    $result = 'Computer wins :(';
} elseif ($move =='paper' and $comp_move=='paper') {
    $result = 'Tis a tie!';
} elseif ($move =='scissors' and $comp_move=='paper') {
    $result ='You win!';
} elseif ($move =='scissors' and $comp_move=='rock') {
    $result = 'Computer wins :(';
} else {
    $result ='Tis a tie!';
}

$_SESSION['game_result'] = [
    'move' => $move,
    'comp_move' => $comp_move,
    'result' => $result
];

header('Location: index.php');
