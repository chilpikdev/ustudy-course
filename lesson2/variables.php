<?php

// camelCase 
$camelCase = "Aybek";
$camelCase = 'Айбек';

// snake_case
// $snake_case = "Aybek";

// PascalCase
// $PascalCase = "Aybek";

// $1abs - qa'te
$abs1 = "abs1";
$_abs1 = "abs1";

$Abs = "Abs";
$abs = "abs";

echo $Abs;

echo "<br>";
echo "<br>";

echo $abs;

echo "<br>";
echo "<br>";

// ma'nislerin salistiriw
var_dump($Abs == $abs);

echo "<br>";
echo "<br>";

$camelCase = "Rasul"; // string - basqa so'z
$camelCase = 1; // int - pu'tin san
$camelCase = true; // bool - shin
$camelCase = false; // bool - jalg'an
$camelCase = 1.5; // float - haqiyqiy san
$camelCase = [1, 2, 3, "a", "b", "c", "another text"]; // array - bos emes massiv
$camelCase = []; // array - bos massiv
$camelCase = new stdClass(); // object - bos obyekt
$camelCase->foo = "bar"; // object - foo bul property

var_dump($camelCase); 

echo "<br>";
echo "<br>";

// int values ranges
$minusMax = -2147483648;
$plyusMax = 2147483647;

echo $minusMax . " - " . $plyusMax;