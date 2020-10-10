<?php

namespace App;

class Game
{
    //Combinations of the game. Gets the combinations from the config file
    protected static array $combinations;

    //Determines who has won the game
    public static function whoWon(string $pcMove, string $playerMove): string
    {
        if ($playerMove === $pcMove) {
            return "It's a tie";
        } elseif (in_array($pcMove, static::$combinations[$playerMove])) {
            return 'You Won';
        } elseif ($playerMove === '') {
            return 'Make a Move!';
        } else {
            return 'You Lost';
        }
    }

    //Gets the combinations
    public static function getCombinations()
    {
        //Before getting the combs set them as is in the config.
        static::setCombinations();

        return array_keys(static::$combinations);
    }

    //Sets the combinations as is in the config file
    private static function setCombinations()
    {
        require '../03-10-2020/config.php';
        static::$combinations = $combinations;

        return static::$combinations;
    }
}