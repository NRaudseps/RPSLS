<?php

use App\Game;

class HumanPlayer
{
    //<input type='image'> returns a post request of the users click coordinates ->
    //Like [rock_x] => 123 then just formats that to 'rock'
    //This method returns a formatted move string that can be used elsewhere
    public function move(array $post): string
    {
        $answer = array_keys($post)[0];

        return substr($answer, 0, strlen($answer) - 2);
    }
}