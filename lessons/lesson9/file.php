<?php

/**
 * Fayldi ashiw rejimleri:
 * r - tek g'ana oqiw
 * w - jaziw
 * a - fayldin' aqirina qosiw
 * r+ - oqiw ha'm jaziw (fayl jaratilg'an boliwi sha'rt)
 * w+ - oqiw ha'm jaziw (fayldin' u'stine jaziw)
 * a+ - qosiw ha'm jaziw (ko'rsetkishti fayldin' aqirina ko'shiredi)
 */

$file = fopen("files/file.txt", "r");

if (!$file) {
    die("Fayl tabilmadi");
}

while (($line = fgets($file)) !== false) {
    echo $line . "<br>";
}

fclose($file);

echo "<br>";

echo file_get_contents("files/file.txt");

$file2 = fopen("files/file.txt", "w");
fwrite($file2, "Jan'a qatar \n");
fclose($file2);

echo "<br>";

file_put_contents("files/file.txt", "Lorem ipsum\n");

$file3 = fopen("files/file.txt", "a");
fwrite($file3,"jan'a qatar 3\n");
fclose($file3);

echo "<br>";

file_put_contents("files/file.txt", "\tqosimsha qatar", FILE_APPEND);

echo "<br>";

if (file_exists("files/file.txt")) {
    echo "fayl bar";
} else {
    echo "fayl tabilmadi";
}

echo "<br>";

$file = fopen("files/file3.txt","a+");

if (!$file) {
    echo "fayl tabilmadi";
}

fwrite($file,"text 1");
fclose($file);

echo "<br>";

if (unlink("files/file3.txt")) {
    echo "fayl tabisli o'shti";
} else {
    echo "fayl tabilmadi ya'ki kerekli ruxsat joq";
}

echo "<br>";

if (mkdir('path')) {
    echo "papka jaratildi";
} else {
    echo "jaratilmadi";
}

echo "<br>";

if (rmdir('path')) {
    echo "papka o'shti";
} else {
    echo "o'shpedi";
}