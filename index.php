<?php

require_once 'config.php';
require_once 'app/Game.php';
require_once 'app/Player/ComputerPlayer.php';
require_once 'app/Player/HumanPlayer.php';

use App\Game;

//Sets the computer move from a Computer Player object
$computer = new ComputerPlayer();
$computerMove = $computer->move();

//Gets a POST request and then the HumanPlayer object sets the move
$player = new HumanPlayer();
$playerMove = $player->move($_POST);

//Determine who has won   
$game = Game::whoWon($computerMove, $playerMove);

//Load the view
require 'views/game.view.php';