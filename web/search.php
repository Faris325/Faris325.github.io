<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style/style-search.css"> </link>
   
</head>

<body>
    <?php
    // Функция для поиска похожих слов на страницах сайта
    function searchSimilarWords($query)
    {
        // Путь к папке с файлами сайта
        $folder = 'D:/ospanel/domains/web/';

        // Получаем список всех файлов в папке
        $files = scandir($folder);

        // Массив для хранения результатов
        $results = array();

        // Проходим по каждому файлу
        foreach ($files as $file) {
            // Пропускаем некоторые файлы 
            if ($file == 'send.php' || $file == 'search.php')
                continue; // Исключаем search.php из поиска
    
            // Проверяем, является ли файл текстовым файлом
            if (!isTextFile($file))
                continue;

            // Считываем содержимое файла
            $content = file_get_contents($folder . $file);

            // Разбиваем содержимое на слова
            $words = preg_split('/\s+/', $content, -1, PREG_SPLIT_NO_EMPTY);

            // Проверяем каждое слово на схожесть с запросом
            foreach ($words as $word) {
                // Если слово содержит запрос (или наоборот), добавляем его в результат
                if (stripos($word, $query) !== false || stripos($query, $word) !== false) {
                    $results[] = $file;
                    break;
                }
            }
        }

        return $results;
    }

    // Функция для проверки, является ли элемент текстовым файлом
    function isTextFile($file)
    {
        $allowedExtensions = array('txt', 'html', 'php', 'css', 'js'); // Допустимые расширения файлов
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);
        return in_array($fileExtension, $allowedExtensions);
    }

    // Получаем запрос из формы
    $query = isset($_GET['query']) ? $_GET['query'] : '';

    // Если запрос пуст, выводим сообщение
    if (empty($query)) {
        echo "Введите запрос для поиска.";
        exit;
    }

    // Ищем похожие слова на страницах
    $similarWords = searchSimilarWords($query);

    // Выводим результаты
    if (!empty($similarWords)) {
        echo "<h2>Результаты поиска:</h2>";
        foreach ($similarWords as $result) {
            echo "<div class='search-result'>";
            echo "<p>Слово '<strong>{$query}</strong>' найдено на странице <a href='{$result}'>{$result}</a>.</p>";
            echo "</div>";
        }
    } else {
        echo "<p>Ничего не найдено.</p>";
    }
    ?>

</body>

</html>