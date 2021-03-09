<?php

require "core/EquationInterface.php";
require "core/LogAbstract.php";
require "core/LogInterface.php";

require "Alexeev/AlexeevLog.php";
require "Alexeev/Line.php";
require "Alexeev/Square.php";
//readLine @Подсказка@

use Alexeev\AlexeevLog;
use Alexeev\Square;

echo "Enter 3 parameters: " .PHP_EOL;
$a = readline("a = ");
$b = readline("b = ");
$c = readline("c = ");

AlexeevLog::log("The equation: " . $a . "X^2 + " . $b . "X + " . $c . " = 0" . PHP_EOL);

try
{
   $Square = new Square();
    $res = $Square->solve($a, $b, $c);
    foreach ($res as $el)
    {
        AlexeevLog::log($el);
    }
}
catch (Error $e)
{
    AlexeevLog::log($e->getMessage() . PHP_EOL);
}