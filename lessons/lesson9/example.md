## Примеры которые помогут глубже разобраться с различными аспектами работы с файлами и директориями в PHP:

### 1. Открыть файл для чтения и вывести его содержимое построчно

```php
$file = fopen("files/file.txt", "r");

if (!$file) {
    die("Файл не найден");
}

while (($line = fgets($file)) !== false) {
    echo $line . "<br>";
}

fclose($file);
```

### 2. Прочитать и вывести содержимое файла с помощью `file_get_contents`

```php
echo file_get_contents("files/file.txt");
```

### 3. Записать текст в файл, предварительно очистив его содержимое

```php
$file = fopen("files/file.txt", "w");
fwrite($file, "Новая строка\n");
fclose($file);
```

### 4. Записать текст в файл с помощью `file_put_contents`, очистив его

```php
file_put_contents("files/file.txt", "Lorem ipsum\n");
```

### 5. Добавить текст в конец файла

```php
$file = fopen("files/file.txt", "a");
fwrite($file, "Добавленная строка\n");
fclose($file);
```

### 6. Добавить текст в конец файла с помощью `file_put_contents` и `FILE_APPEND`

```php
file_put_contents("files/file.txt", "\tДополнительная строка", FILE_APPEND);
```

### 7. Проверить существование файла

```php
if (file_exists("files/file.txt")) {
    echo "Файл существует";
} else {
    echo "Файл не найден";
}
```

### 8. Создать и записать файл с возможностью записи и чтения (режим `a+`)

```php
$file = fopen("files/file3.txt", "a+");

if (!$file) {
    echo "Файл не найден";
} else {
    fwrite($file, "Текст 1\n");
    fclose($file);
}
```

### 9. Удалить файл

```php
if (unlink("files/file3.txt")) {
    echo "Файл удален";
} else {
    echo "Файл не найден или нет разрешения";
}
```

### 10. Создать директорию

```php
if (mkdir('new_folder')) {
    echo "Папка создана";
} else {
    echo "Ошибка при создании папки";
}
```

### 11. Удалить директорию

```php
if (rmdir('new_folder')) {
    echo "Папка удалена";
} else {
    echo "Ошибка при удалении папки";
}
```

### 12. Переименовать файл

```php
if (file_exists("files/file.txt")) {
    rename("files/file.txt", "files/renamed_file.txt");
    echo "Файл переименован";
} else {
    echo "Файл не найден";
}
```

### 13. Записать данные в файл с форматированием HTML

```php
$htmlContent = "<h1>Заголовок</h1><p>Это параграф с <strong>жирным</strong> текстом.</p>";
file_put_contents("files/html_file.html", $htmlContent);
echo "HTML-контент записан в файл";
```

### 14. Получить размер файла

```php
$filename = "files/renamed_file.txt";
if (file_exists($filename)) {
    $size = filesize($filename);
    echo "Размер файла '$filename': $size байт";
} else {
    echo "Файл не найден";
}
```

### 15. Прочитать файл в массив строк

```php
$filename = "files/renamed_file.txt";
if (file_exists($filename)) {
    $lines = file($filename);
    echo "Содержимое файла построчно:";
    foreach ($lines as $line) {
        echo $line . "<br>";
    }
} else {
    echo "Файл не найден";
}
```
