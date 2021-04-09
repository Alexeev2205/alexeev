+<?php

require __DIR__ . "/vendor/autoload.php";

//readLine @Подсказка@

use Alexeev\AlexeevLog;
use Alexeev\Square;
use Alexeev\AlexeevException;

AlexeevLog::log("Program version: " . trim(file_get_contents("version")));

echo "Enter 3 parameters: " .PHP_EOL;
$a = readline("a = ");
$b = readline("b = ");
$c = readline("c = ");

AlexeevLog::log("The equation: " . $a . "X^2 + " . $b . "X + " . $c . " = 0" . PHP_EOL);

try
{
   $Square = new Square();
    $res = $Square->solve($a, $b, $c);
    if ($a == 0) {
        AlexeevLog::log("It is a linear equation.");
    } else {
        AlexeevLog::log("It is a quad equation.");
    }

    AlexeevLog::log("Equation roots: ");
    foreach ($res as $el)
    {
        AlexeevLog::log($el);
    }
}
catch (AlexeevException $e)
{
    AlexeevLog::log($e->getMessage() . PHP_EOL);
}

AlexeevLog::write();