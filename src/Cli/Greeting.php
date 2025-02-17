<?php

namespace BrainGames\Cli;

class Greeting
{
    public static function sayHello()
    {
        \cli\line("Welcome to the Brain Games!");
        $name = \cli\prompt("May I have your name?");
        \cli\line("Hello, $name!");
    }
}
