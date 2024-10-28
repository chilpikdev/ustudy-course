<?php

$a = 1;

if ($a == 1) {
    echo "ten'";
} else {
    echo "ten' emes!";
}

echo "<br>";
echo "<br>";

$appleCount = 1000;

if ($appleCount == 0) {
    echo "Alma joq";
} else if ($appleCount > 10) {
    echo "Almalar sani 10 nan ko'p";
} else if ($appleCount <= 10) {
    echo "Almalar sani 10 yamasa odanda az";
}

echo "<br>";
echo "<br>";

var_dump($appleCount == 0);

echo "<br>";
echo "<br>";

if (false) {
    echo "true";
} else {
    echo "false";
}

echo "<br>";
echo "<br>";

$num = 13;

if ($num % 2 == 0) {
    echo "jup san";
} else {
    echo "taq san";
}

echo "<br>";
echo "<br>";

// -1, 0, 1
echo 100 <=> -55 + 100 + 55;

echo "<br>";
echo "<br>";

// -1, 0, 1 (xor)
$bool = (bool) "-1123";

if ($bool) {
    echo "true";
} else {
    echo "false";
}