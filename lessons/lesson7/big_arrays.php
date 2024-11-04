<?php

/**
 * многомерный массив
 */
$data = [
    [
        'price' => 100,
    ],
    [
        'price' => 100,
    ],
    [
        'price' => 100,
    ],
    [
        'price' => 100,
    ],
    [
        'price' => 100,
    ],
];

$prices = array_column($data, 'price');

var_dump($prices);

echo "<br><br>";

$sum = array_sum($prices);

echo $sum;

echo "<br><br>";

$matrix = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$squaredMatrix = array_map(function ($row) {
    return array_map(function ($n) {
        return pow($n, 2);
    }, $row);
}, $matrix);

print_r($squaredMatrix);

echo "<br><br>";

$students = [
    [
        'name' => 'Jalalatdin',
        'age' => 20
    ],
    [
        'name' => "O'lmas",
        'age' => 19
    ],
    [
        'name' => 'Xushnid',
        'age' => 18
    ]
];

$ages = array_column($students, 'age');
print_r($ages);

echo "<br><br>";

$array1 = [
    'numbers' => [
        1,
        2,
        3
    ],
    'letters' => [
        'a',
        'b'
    ]
];

$array2 = [
    'numbers' => [
        4,
        5
    ],
    'letters' => [
        'c'
    ]
];

$mergedArray = array_merge_recursive($array1, $array2);

print_r($mergedArray);

echo "<br><br>";

$users = [
    [
        'name' => 'Islam',
        'age' => '30'
    ],
    [
        'name' => 'O\'lmas',
        'age' => '19'
    ],
    [
        'name' => 'Saylawbay',
        'age' => '30'
    ],
    [
        'name' => 'Alpamis',
        'age' => '23'
    ],
];

$adults = array_filter($users, function ($user) {
    return $user['age'] >= 30;
});

print_r($adults);

echo "<br><br>";

usort($users, function ($a, $b) {
    return $a["age"] <=> $b["age"];
});

print_r($users);