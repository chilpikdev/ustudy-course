<?php

for ($i = 0; $i < 10; $i++) {
    echo $i . "<br>";
}

echo "<br>";

for ($i = 10; $i >= 0; $i--) {
    echo $i ."<br>";
}

echo "<br>";

for ($i = 1, $j = 10; $i == $j, $j % 2 == 0; $i++, $j++) {
    echo $i ."<br>";
}