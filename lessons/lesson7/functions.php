<?php

/**
 * 1. Встроенные функции
 * 2. Пользовательские функции
 * 3. Аноним (лямбда)
 * 4. Рекурсивные
 * 5. Методы (класс)
 * 6. Генераторы
 * 7. Обработчики ошибок
 */

// 1
echo strlen("this new line");

echo "<br>";
echo "<br>";

// 2
function greet(string $firstName, string $lastName): string {
    return "Hello, " . $firstName . " " . $lastName;
}

echo greet('Islam', 'Khaliev');

echo "<br>";
echo "<br>";

// 3
$greet = function (string $firstName, string $lastName): string {
    return "Hello, " . $firstName . " " . $lastName;
};

echo $greet("O'tkir","Quwanishbaev");

echo "<br>";
echo "<br>";

// 4
function factorial(int $n) {
    if ($n <= 1) {
        return 1;
    }

    return $n * factorial($n - 1);
}

echo factorial(5);

echo "<br>";
echo "<br>";

// 6
function numbers() {
    for ($i = 0; $i <= 3; $i++) {
        yield $i;
    }
}

foreach (numbers() as $number) {
    echo $number . "<br>";
}

echo "<br>";
echo "<br>";

// 7
set_error_handler(function ($errno, $errstr) {
    echo "Qa'telik: [$errno] $errstr";
});

echo "<br>";
echo "<br>";

// example
function printText(string $text, ...$texts) {
    echo $text;

    foreach ($texts as $text) {
        echo $text . " ";
    }
}

echo printText('say hello', 'new', 'world', 'refresh');

