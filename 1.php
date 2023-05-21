<!DOCTYPE html>
<html>
<header>
	Shatov Ilya
</header>
<body>

<?php
// Создаем массив фильмов по жанрам
$movies = [
    "мелодрама" => ["Титаник", "Великий Гэтсби", "Виноваты звезды"],
    "боевик" => ["Мстители", "Терминатор", "Джон Уик"],
    "детектив" => ["Шерлок Холмс", "Мисс Марпл", "Тайна перевала Дятлова"],
    "комедия" => ["1+1", "Мальчишник в Вегасе", "Друзья"],
    "фантастика" => ["Звездные войны", "Назад в будущее", "Матрица"]
];

// Выводим содержимое массива в браузере
foreach ($movies as $genre => $films) {
    echo "<h2>$genre</h2>";
    echo "<ul>";
    foreach ($films as $film) {
        echo "<li>$film</li>";
    }
    echo "</ul>";
}
?>

</body>
</html>