## Задачи по темам "переменные" и "типы данных" в PHP:

### 1. **Создание переменных и вывод данных**
   - Создайте три переменные: имя, возраст, и страна проживания. Присвойте им соответствующие значения.
   - Выведите на экран фразу: "Меня зовут [имя], мне [возраст] лет, я живу в [страна]."

   **Пример решения:**
   ```php
   <?php
   $name = "Алексей";
   $age = 25;
   $country = "Россия";
   
   echo "Меня зовут $name, мне $age лет, я живу в $country.";
   ?>
   ```

### 2. **Типы данных**
   - Создайте переменные, содержащие следующие данные:
     1. Строка (имя продукта)
     2. Целое число (количество товара)
     3. Число с плавающей точкой (цена товара)
     4. Булевское значение (товар в наличии или нет)

   - Выведите тип каждой переменной с помощью функции `gettype()`.

   **Пример решения:**
   ```php
   <?php
   $productName = "Кофе";
   $quantity = 10;
   $price = 5.99;
   $inStock = true;

   echo gettype($productName) . "\n";  // string
   echo gettype($quantity) . "\n";     // integer
   echo gettype($price) . "\n";        // double
   echo gettype($inStock) . "\n";      // boolean
   ?>
   ```

### 3. **Конвертация типов данных**
   - Дана строка `"123.45"`. Преобразуйте её в число с плавающей точкой и в целое число. Выведите оба значения.

   **Пример решения:**
   ```php
   <?php
   $str = "123.45";
   $floatVal = (float) $str;
   $intVal = (int) $str;

   echo "Число с плавающей точкой: $floatVal\n";
   echo "Целое число: $intVal\n";
   ?>
   ```

### 4. **Операции с переменными**
   - Создайте две переменные: целое число и число с плавающей точкой. Выполните между ними арифметические операции: сложение, вычитание, умножение и деление. Выведите результат каждой операции.

   **Пример решения:**
   ```php
   <?php
   $intVal = 10;
   $floatVal = 2.5;

   echo "Сложение: " . ($intVal + $floatVal) . "\n";
   echo "Вычитание: " . ($intVal - $floatVal) . "\n";
   echo "Умножение: " . ($intVal * $floatVal) . "\n";
   echo "Деление: " . ($intVal / $floatVal) . "\n";
   ?>
   ```

### 5. **Проверка типа переменной**
   - Создайте переменную и присвойте ей любое значение. Проверьте, является ли переменная целым числом, строкой или булевским значением, используя функции `is_int()`, `is_string()` и `is_bool()`. Выведите результат проверки.

   **Пример решения:**
   ```php
   <?php
   $var = 100;

   if (is_int($var)) {
       echo "$var — это целое число.\n";
   } elseif (is_string($var)) {
       echo "$var — это строка.\n";
   } elseif (is_bool($var)) {
       echo "$var — это булевское значение.\n";
   }
   ?>
   ```