<?php
// Controller

session_start();

#Should create variables: $move, $comp_move, $result

if (isset($_SESSION['game_result'])) {
    extract($_SESSION['game_result']);
    $GamePlayed = true;
} else {
    $GamePlayed = false;
}

$_SESSION['game_result'] = null;





require 'index-view.php';

