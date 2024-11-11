## В PHP массивы бывают нескольких типов, и каждая их разновидность имеет свои особенности и способы использования.

### Типы массивов в PHP

1. **Нумерованные (или индексные) массивы** – элементы массива индексируются числовыми ключами, начиная с 0. Используются для хранения набора данных, к которым можно обращаться по порядковому номеру.

2. **Ассоциативные массивы** – массивы, в которых ключами являются строки. Применяются для данных, когда нужно создать пары «ключ-значение».

3. **Многомерные массивы** – массивы, содержащие другие массивы. Полезны для хранения сложных структур данных, таких как матрицы или таблицы данных.

4. **Объектные массивы (ArrayObject)** – расширенная структура массива в виде объекта, позволяющая использовать встроенные методы класса ArrayObject. Удобны для более сложных операций с данными.

5. **SplFixedArray** – массив фиксированной длины. Применяется, когда необходимо создать массив с ограниченной длиной для экономии памяти и повышения производительности.

---

### Задачи для практики

1. **Создайте нумерованный массив из 5 элементов и выведите каждый элемент в цикле.**
2. **Создайте ассоциативный массив, где ключи – это названия дней недели, а значения – соответствующие числа от 1 до 7. Выведите значение для ключа «Среда».**
3. **Создайте массив, в котором находятся другие массивы с данными о сотрудниках (имя, возраст, должность). Выведите данные каждого сотрудника.**
4. **Создайте массив из 10 случайных чисел и отсортируйте его по возрастанию.**
5. **Используя ассоциативный массив, создайте структуру, где ключами будут категории продуктов (например, «Фрукты»), а значениями – списки продуктов в каждой категории.**
6. **Создайте многомерный массив для хранения данных о студентах (имя, оценки по предметам). Найдите средний балл по каждому предмету для всех студентов.**
7. **Создайте массив с элементами «apple», «banana», «orange» и преобразуйте его в строку с разделителем «,».**
8. **Используя SplFixedArray, создайте массив на 5 элементов и заполните его случайными числами.**
9. **Создайте ассоциативный массив с информацией о странах и их столицах. Напишите функцию, которая принимает название страны и возвращает её столицу.**
10. **Создайте многомерный массив для представления шахматной доски, где каждый элемент – это фигура или пустая клетка. Выведите доску в текстовом формате.**
11. **Создайте ассоциативный массив, содержащий 5 студентов и их баллы. Используйте функцию для нахождения студента с наивысшим баллом.**
12. **Создайте нумерованный массив с именами и выведите их в алфавитном порядке.**
13. **Используя массив, создайте структуру, где ключами являются имена сотрудников, а значениями – массивы, содержащие даты их отпуска.**
14. **Создайте массив из 10 чисел и выведите только те числа, которые являются чётными.**
15. **Создайте ассоциативный массив, где ключи – это названия месяцев, а значения – количество дней в каждом месяце. Выведите количество дней в феврале.**
16. **Создайте многомерный массив, представляющий расписание занятий (день недели, время, предмет). Выведите расписание для понедельника.**
17. **Создайте массив с 10 элементами, содержащими целые числа. Напишите функцию, которая возвращает сумму всех элементов массива.**
18. **Создайте ассоциативный массив с информацией о книгах (название, автор, год издания). Напишите функцию для поиска книг, изданных после заданного года.**
19. **Создайте многомерный массив для хранения данных о спортивных командах (название команды, страна, список игроков). Выведите список всех команд и их игроков.**
20. **Создайте массив, содержащий только уникальные значения из исходного массива с повторяющимися элементами.** 

---

### Примеры решений

1. **Нумерованный массив с 5 элементами и вывод каждого элемента в цикле.**

   ```php
   $numbers = [1, 2, 3, 4, 5];
   foreach ($numbers as $number) {
       echo $number . "\n";
   }
   ```

2. **Ассоциативный массив с днями недели и вывод значения для «Среда».**

   ```php
   $days = [
       "Понедельник" => 1,
       "Вторник" => 2,
       "Среда" => 3,
       "Четверг" => 4,
       "Пятница" => 5,
       "Суббота" => 6,
       "Воскресенье" => 7,
   ];
   echo $days["Среда"];
   ```

3. **Многомерный массив с данными сотрудников и вывод данных каждого сотрудника.**

   ```php
   $employees = [
       ["name" => "Alice", "age" => 30, "position" => "Manager"],
       ["name" => "Bob", "age" => 25, "position" => "Developer"],
       ["name" => "Charlie", "age" => 28, "position" => "Designer"],
   ];
   foreach ($employees as $employee) {
       echo "{$employee['name']}, {$employee['age']}, {$employee['position']}\n";
   }
   ```

4. **Массив из 10 случайных чисел и сортировка по возрастанию.**

   ```php
   $randomNumbers = [5, 3, 8, 6, 2, 9, 1, 4, 7, 0];
   sort($randomNumbers);
   print_r($randomNumbers);
   ```

5. **Ассоциативный массив с категориями продуктов.**

   ```php
   $products = [
       "Фрукты" => ["яблоко", "банан", "апельсин"],
       "Овощи" => ["картофель", "морковь", "лук"],
       "Мясо" => ["курица", "говядина", "свинина"],
   ];
   print_r($products);
   ```

6. **Многомерный массив со студентами и средний балл по каждому предмету.**

   ```php
   $students = [
       ["name" => "Anna", "math" => 90, "english" => 85],
       ["name" => "Tom", "math" => 78, "english" => 92],
       ["name" => "Sam", "math" => 88, "english" => 84],
   ];
   $totalMath = $totalEnglish = 0;
   foreach ($students as $student) {
       $totalMath += $student["math"];
       $totalEnglish += $student["english"];
   }
   echo "Average Math: " . ($totalMath / count($students)) . "\n";
   echo "Average English: " . ($totalEnglish / count($students)) . "\n";
   ```

7. **Массив в строку с разделителем «,».**

   ```php
   $fruits = ["apple", "banana", "orange"];
   echo implode(", ", $fruits);
   ```

8. **SplFixedArray на 5 элементов и заполнение случайными числами.**

   ```php
   $fixedArray = new SplFixedArray(5);
   for ($i = 0; $i < $fixedArray->getSize(); $i++) {
       $fixedArray[$i] = rand(1, 100);
   }
   print_r($fixedArray);
   ```

9. **Ассоциативный массив с названиями стран и столицами.**

   ```php
   $countries = ["France" => "Paris", "Spain" => "Madrid", "Italy" => "Rome"];
   function getCapital($country) {
       global $countries;
       return $countries[$country] ?? "Неизвестная страна";
   }
   echo getCapital("Spain");
   ```

10. **Многомерный массив для шахматной доски.**

    ```php
    $chessBoard = [
        ["R", "N", "B", "Q", "K", "B", "N", "R"],
        ["P", "P", "P", "P", "P", "P", "P", "P"],
        ["", "", "", "", "", "", "", ""],
        ["", "", "", "", "", "", "", ""],
        ["", "", "", "", "", "", "", ""],
        ["", "", "", "", "", "", "", ""],
        ["p", "p", "p", "p", "p", "p", "p", "p"],
        ["r", "n", "b", "q", "k", "b", "n", "r"],
    ];
    foreach ($chessBoard as $row) {
        echo implode(" ", $row) . "\n";
    }
    ```

11. **Ассоциативный массив со студентами и их баллами.**

    ```php
    $scores = ["Alice" => 90, "Bob" => 85, "Charlie" => 95];
    $highestScore = max($scores);
    $topStudent = array_search($highestScore, $scores);
    echo "Top Student: $topStudent with $highestScore points.";
    ```

12. **Имена в алфавитном порядке.**

    ```php
    $names = ["Anna", "Tom", "Sam", "Alice"];
    sort($names);
    print_r($names);
    ```

13. **Ассоциативный массив с датами отпуска сотрудников.**

    ```php
    $vacations = [
        "Alice" => ["2024-07-01", "2024-12-15"],
        "Bob" => ["2024-08-10", "2024-11-01"],
    ];
    print_r($vacations);
    ```

14. **Чётные числа из массива.**

    ```php
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
    $evenNumbers = array_filter($numbers, fn($num) => $num % 2 === 0);
    print_r($evenNumbers);
    ```

15. **Ассоциативный массив с месяцами и днями.**

    ```php
    $months = ["January" => 31, "February" => 28, "March" => 31];
    echo "Days in February: " . $months["February"];
    ```

16. **Многомерный массив с расписанием занятий.**

    ```php
    $schedule = [
        "Понедельник" => ["9:00" => "Математика", "11:00" => "Физика"],
        "Вторник" => ["10:00" => "Химия", "13:00" => "История"],
    ];
    print_r($schedule["Понедельник"]);
    ```

17. **Сумма всех элементов массива.**

    ```php
    $nums = [1, 2, 3, 4, 5];
    echo "Sum: " . array_sum($nums);
    ```

18. **Поиск книг, изданных после заданного года.**

    ```php
    $books = [
        ["title" => "Book A", "author" => "Author A", "year" => 1999],
        ["title" => "Book B", "author" => "Author B", "year" => 2005],
        ["title" => "Book C", "author" => "Author C", "year" => 2015],
    ];
    function findBooksAfter($year) {
        global $books;
        return array_filter($books, fn($book) => $book["year"] > $year);
    }
    print_r(findBooksAfter(2000));
    ```

19. **Многомерный массив с данными о спортивных командах.**

    ```php
    $teams = [
        ["team" => "Team A", "country" => "Country A", "players" => ["Alice", "Bob"]],
        ["team" => "Team B", "country" => "Country B", "players" => ["Charlie", "David"]],
    ];
    foreach ($teams as $team) {
        echo "{$team['team']} ({$team['country']}): " . implode(", ", $team["players"]) . "\n";
    }
    ```

20. **Массив с уникальными значениями из исходного массива.**

    ```php
    $values = [1, 2, 2, 3, 4, 4, 5];
    $uniqueValues = array_unique($values);
    print_r($uniqueValues);
    ```