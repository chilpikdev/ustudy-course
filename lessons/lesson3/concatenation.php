<?php

/**
 * Konkatenaciyada biz "." belgisinen
 * paydalanamiz.
 */
$a = 'a';
$b = 'b';
$c = 'c';

echo $a . $b . $c;

echo '<br>';
echo '<br>';

echo $a . " - " . $b . " - " . $c;

echo "<br>";
echo "<br>";

echo $a . 1;

echo '<br>';
echo '<br>';

$name = "Nurda'wlet";
$surname = "Bayda'wletov";
$birthday = '04.11.2007';
$phone = '+(' . 91 . ') ' . 929 . '-' . 20 . '-0' . 7;
$age = 17;

// O'zim haqqimda mag'liwmat
echo "Men " . $name . ' ' . $surname . ' ' . $birthday . " jili tuwilg'anman. Jasim " . $age . " de. Menin' baylanis nomerim " . $phone . '.';

echo "<br>";
echo "<br>";

echo "Men $name $surname $birthday jili tuwilg'anman. Jasim $age de. Menin' baylanis nomerim $phone.";

echo "<br>";
echo "<br>";

// \' - arqali simvolg'a aylandirip kettik
echo 'Men $name $surname $birthday jili tuwilg\'anman. Jasim $age de. Menin\' baylanis nomerim $phone.';
