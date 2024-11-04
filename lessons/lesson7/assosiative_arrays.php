<?php

/**
 * ассоциативный массив
 */
$person = [
    'name' => 'Islam',
    'age' => 30,
    'city' => 'Nukus'
];

$keys = array_keys($person);

var_dump($keys);

echo "<br><br>";

$keys = [];

foreach ($person as $key => $value) {
    $keys[] = $key;
}

var_dump($keys);

echo "<br><br>";

$values = array_values($person);

var_dump($values);

echo "<br><br>";

$hasAge = array_key_exists("age", $person);

var_dump($hasAge);

echo "<br><br>";

$uppearcaseValues = array_map('strtoupper', $person);

var_dump($uppearcaseValues);

echo "<br><br>";
