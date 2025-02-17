<?php

namespace BrainGames\Cli;

class Greeting
{
    public static function sayHello()
    {
        \cli\line("Welcome to the Brain Games!");
        $name = \cli\prompt("May I have your name?");
        \cli\line("Hello, $name!");
        \cli\line("Answer 'yes' if the number is even, otherwise answer 'no'.");
        $r = random_int(0, 100);
        \cli\line("Question: {$r}");

        $t = false;
        while ($t == false) {
            $question = \cli\prompt("Your answer");
            if ($question == "yes" && $r % 2 == 0) {
                \cli\line("Correct!");
                $t = true;
            } elseif ($question == "no" && $r % 2 != 0) {
                \cli\line("Correct!");
                $t = true;
            } else {
                \cli\line("'yes' is wrong answer ;(. Correct answer was 'no'.");
                \cli\line("Let's try again, $name!");
                $t = false;
            }
        }
        \cli\line("Congratulations, $name!");
    }
}
