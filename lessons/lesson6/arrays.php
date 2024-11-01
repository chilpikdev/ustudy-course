<?php

// bir o'lshemli
$array = [
    1, 
    2,
    3
];

var_dump($array);
// echo $array[0];

echo "<br>";
echo "<br>";

// ассоциатив
$array2 = [
    'first_name' => "Бахадыр",
    'last_name' => "Исмаилов",
    'email' => "username@email.com",
];

var_dump($array2);

echo "<br>";
echo "<br>";

// ko'p o'lshemli
$array3 = [
    'data' => [
        's1' => 's1',
        's2' => 3,
    ],
    1,
    'string',
    true,
    [
        'key' => [
            'new string'
        ]
    ]
];

var_dump($array3);

echo '<br>';
echo '<br>';

echo $array3[3]['key'][0];

echo '<br>';
echo '<br>';

$list = [
    'string 1',
    'string 2',
    'string 3',
    'string 4',
    'string 5',
];

array_map(function ($item) {
    echo $item . "<br>";
}, $list);