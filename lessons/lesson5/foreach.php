<?php

$array = [
    1,
    2,
    3,
    4,
    5,
    6,
];

foreach ($array as $key => $value) {
    echo "array[$key] => $value <br>";
}

echo "<br>";

$array = [
    'name' => "O'tkir",
    'surname' => "Quwanishbaev",
    'birthday' => '13.04.2005',
    'phone' => [
        'home' => 912002002,
        'work' => 912002007,
    ]
];

foreach ($array as $key => $value) {
    var_dump($key, $value);
    echo "<br>";
}