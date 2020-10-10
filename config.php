<?php
//Config file for changing the game settings.
//However this doesn't change the html file. That has to be changed manually
$combinations = [
    'rock' => ['scissors', 'lizard'], //rock wins scissors and lizard
    'paper' => ['spock', 'rock'], //paper wins spock and rock
    'scissors' => ['lizard', 'paper'], //scissors wins lizard and paper
    'lizard' => ['paper', 'spock'], // lizard wins paper and spock
    'spock' => ['scissors', 'rock'] // spock wins scissors and rock
];