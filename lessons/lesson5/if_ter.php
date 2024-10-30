<?php

$var = 123;
$a = ($var) ? 1 : 0; // false, null, 0, ""
echo $a;

echo "<br>";
echo "<br>";

$var = false;
$a = $var ?: 0; // false, null, 0, ""
echo $a;

echo "<br>";
echo "<br>";

$var = null;
$a = $var ?? 0; // null
echo $a;