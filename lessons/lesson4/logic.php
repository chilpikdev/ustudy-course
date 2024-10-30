<?php

/**
 * true - 1
 * false - 0
 * && (ha'm) and (* ko'beytiw)
 * || (yamasa) or (+ qosiw)
 * ! (biykarlaw)
 * xor (ekewden birewi true boliwi kerek)
 */

if (!((20 <= 15) and !("abs" > "ab"))) {
    print(true);    
} else {
    print(false);
}

echo "<br>";
echo "<br>";

// echo (bool) 20 % 3 == 1;
echo (bool) (100 <=> 501);

echo "<br>";
echo "<br>";

var_dump((bool) (50 <=> 100)); // -1

echo "<br>";
echo "<br>";

var_dump((bool) (50 <=> 50)); // 0

echo "<br>";
echo "<br>";

var_dump((bool) (50 <=> 40)); // 1

echo "<br>";
echo "<br>";

if ((100 <=> 501) xor (20 % 3 == 1)) {
    print("true");
} else {
    print("false");
}

echo "<br>";
echo "<br>";

var_dump((20 > 15) xor ("" == ""));

echo "<br>";
echo "<br>";

if ((20 < 15) xor ("" > "")) {
    print("true");
} else {
    print("false");
}

