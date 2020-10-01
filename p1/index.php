<?php

$cards = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

shuffle($cards);

$TeamMRdraw = array_pop($cards);
$TeamCJdraw = array_pop($cards);

if ($TeamMRdraw >$TeamCJdraw) {
    $winner = 'Monica and Rachel win the apartment';
} else {
    $winner = 'Chandler and Joey win the apartment';
}

#Test note

require 'index-view.php' ;