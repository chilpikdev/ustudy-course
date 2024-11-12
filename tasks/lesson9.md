Конечно! Вот примеры кода для каждой задачи:

### 1. Создание текстового файла

```php
$filename = 'example.txt';
$content = "Hello, this is the initial content.";

file_put_contents($filename, $content);
echo "File '$filename' created with content.";
```

### 2. Чтение содержимого файла

```php
$filename = 'example.txt';

if (file_exists($filename)) {
    $content = file_get_contents($filename);
    echo "File content: " . $content;
} else {
    echo "File '$filename' does not exist.";
}
```

### 3. Запись текста в файл

```php
$filename = 'example.txt';
$newContent = "\nThis is new content added to the file.";

file_put_contents($filename, $newContent, FILE_APPEND);
echo "New content added to '$filename'.";
```

### 4. Чтение определённой строки из файла

```php
$filename = 'example.txt';
$lineNumber = 2;

if (file_exists($filename)) {
    $lines = file($filename);
    if (isset($lines[$lineNumber - 1])) {
        echo "Line $lineNumber: " . $lines[$lineNumber - 1];
    } else {
        echo "Line $lineNumber does not exist in '$filename'.";
    }
} else {
    echo "File '$filename' does not exist.";
}
```

### 5. Удаление файла

```php
$filename = 'example.txt';

if (file_exists($filename)) {
    unlink($filename);
    echo "File '$filename' has been deleted.";
} else {
    echo "File '$filename' does not exist.";
}
```

### 6. Создание директории

```php
$directory = 'new_folder';

if (!is_dir($directory)) {
    mkdir($directory);
    echo "Directory '$directory' created.";
} else {
    echo "Directory '$directory' already exists.";
}
```

### 7. Удаление директории

```php
$directory = 'new_folder';

if (is_dir($directory)) {
    rmdir($directory);
    echo "Directory '$directory' has been deleted.";
} else {
    echo "Directory '$directory' does not exist.";
}
```

### 8. Перемещение файла в директорию

```php
$filename = 'example.txt';
$destination = 'new_folder/' . $filename;

if (file_exists($filename)) {
    rename($filename, $destination);
    echo "File moved to '$destination'.";
} else {
    echo "File '$filename' does not exist.";
}
```

### 9. Список файлов в директории

```php
$directory = 'new_folder';

if (is_dir($directory)) {
    $files = scandir($directory);
    echo "Files in '$directory': ";
    print_r(array_diff($files, array('.', '..')));
} else {
    echo "Directory '$directory' does not exist.";
}
```

### 10. Копирование файла

```php
$filename = 'example.txt';
$copy = 'copy_of_example.txt';

if (file_exists($filename)) {
    copy($filename, $copy);
    echo "File copied to '$copy'.";
} else {
    echo "File '$filename' does not exist.";
}
```

### 11. Запись текста с HTML-форматированием

```php
$filename = 'formatted.html';
$htmlContent = "<h1>Title</h1><p>This is a paragraph with <strong>bold</strong> text.</p>";

file_put_contents($filename, $htmlContent);
echo "HTML content written to '$filename'.";
```

### 12. Определение размера файла

```php
$filename = 'example.txt';

if (file_exists($filename)) {
    $size = filesize($filename);
    echo "Size of '$filename': $size bytes.";
} else {
    echo "File '$filename' does not exist.";
}
```

### 13. Проверка на пустоту файла

```php
$filename = 'example.txt';

if (file_exists($filename)) {
    if (filesize($filename) == 0) {
        echo "File '$filename' is empty.";
    } else {
        echo "File '$filename' is not empty.";
    }
} else {
    echo "File '$filename' does not exist.";
}
```

### 14. Сравнение двух файлов

```php
$file1 = 'example.txt';
$file2 = 'copy_of_example.txt';

if (file_exists($file1) && file_exists($file2)) {
    if (md5_file($file1) == md5_file($file2)) {
        echo "Files '$file1' and '$file2' are identical.";
    } else {
        echo "Files '$file1' and '$file2' are different.";
    }
} else {
    echo "One or both files do not exist.";
}
```

### 15. Сжатие файла (ZIP)

```php
$filename = 'example.txt';
$zipFilename = 'example.zip';

if (file_exists($filename)) {
    $zip = new ZipArchive();
    if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($filename);
        $zip->close();
        echo "File '$filename' compressed into '$zipFilename'.";
    } else {
        echo "Failed to create ZIP file.";
    }
} else {
    echo "File '$filename' does not exist.";
}
```

## Задачи для работы с файлами и папками.

1. **Создайте текстовый файл и запишите в него строку текста. Затем откройте файл в режиме чтения и выведите его содержимое на экран.**

2. **Проверьте, существует ли файл с определенным именем в директории. Если он существует, добавьте в него новую строку, а если нет — создайте файл и запишите в него начальное сообщение.**

3. **Прочитайте содержимое файла построчно и подсчитайте, сколько строк содержит файл. Выведите количество строк на экран.**

4. **Создайте HTML-файл и запишите в него разметку с заголовком и абзацем текста, используя форматирование HTML. Затем проверьте размер созданного файла и выведите его в байтах.**

5. **Создайте директорию с заданным именем, если она еще не существует. Внутри этой директории создайте файл и запишите в него несколько строк текста.**

6. **Скопируйте содержимое одного файла в другой файл, предварительно проверив, что исходный файл существует. Если файла нет, выведите сообщение об ошибке.**

7. **Откройте файл в режиме "чтение и запись" и запишите в него текст в начало файла. Проверьте, что файл не был пустым изначально.**

8. **Удалите файл и папку, если они существуют. Проверьте существование файлов и папок перед удалением, и если они отсутствуют, выведите сообщение об этом.**

9. **Создайте массив строк и запишите его содержимое построчно в файл. Затем откройте файл, считайте его содержимое построчно и выведите его в обратном порядке.**

10. **Переименуйте файл в директории и проверьте, что переименование прошло успешно, затем переместите его в другую директорию.** 