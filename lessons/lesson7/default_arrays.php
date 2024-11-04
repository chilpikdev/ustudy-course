<?php

/**
 * простой массив
 */
$numbers = [1, 2, 3, 4, 5];

$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $numbers);

var_dump($squaredNumbers);

echo "<br><br>";

$evenNumbers = array_filter($numbers, function ($value) {
    return $value % 2 === 0;
});

var_dump($evenNumbers);

echo "<br><br>";

$sum = array_reduce($numbers, function ($carry, $item) {
    return $carry + $item;
});

echo $sum;

echo "<br><br>";

$array1 = [1, 2, 3, 4, 5];
$array2 = [6];
$array3 = [7, 8, 9, 10];

$mergedArray = array_merge($array1, $array2, $array3);

print_r($mergedArray);

echo "<br><br>";

$fruits = [
    'apple',
    'banana',
];

// $fruits[] = 'cherry';
array_push($fruits, 'cherry', 'pear');

print_r($fruits);

echo "<br><br>";

array_unshift($fruits, 'orange');

print_r($fruits);

echo "<br><br>";

// echo $fruits[0];
echo array_shift($fruits);

echo "<br><br>";

echo array_pop($fruits);

echo "<br><br>";

$someText = "Jalalatdin";

echo $someText[0];

echo "<br><br>";

$colors = [
    'red',
    'green',
    'blue'
];

unset($colors[1]);

print_r($colors);

echo "<br><br>";
