<?php

/**
 * аноним
 * деаноним
 * рекурсия
 */

/**
 * Аноним
 */
// function () {
// }

/**
 * Деаноним
 */
function isTrue(bool $value): bool
{
    return $value ?: false;
}

echo isTrue(true);

echo "<br>";

$x = 5;
$y = 10;

function sum(int $x, int $y): int
{
    return $x + $y;
}

echo sum($x, $y);

echo "<br>";

function helloWorld(): string
{
    return "Hello World!";
}

echo helloWorld();

echo "<br>";

/**
 * Рекурсия
 */

function factorial(int $n): int
{
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}

print factorial(7);

echo "<br>";

function nav(bool $bool): mixed {
    return ($bool) ? nav($bool) : $bool; 
}

echo nav(false);

echo "<br>";
echo "<br>";

$var = (object) "1";

echo gettype($var);
// var_dump($var);