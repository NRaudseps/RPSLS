<?php

use App\Game;

class ComputerPlayer
{
    //Returns a random move from the combinations
    public function move(): string
    {
        //Gets combinations
        $elementArray = Game::getCombinations();

        //Returns a random element from the combinations
        return strtolower($elementArray[rand(0, count($elementArray) - 1)]);
    }
}