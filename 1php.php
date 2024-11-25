<?php
// Задание 1
$x = "Привет";
$y = "мир";

// Задание 2
$message = "$x, $y!";

// Задание 3
$color = "blue"; 

// Задание 4
if (isset($_GET['color'])) {
    $color = $_GET['color'];
}

// Задание 5
$language = "ru";
if (isset($_GET['lang'])) {
    $language = $_GET['lang'];
}

switch ($language) {
    case 'en':
        $x = "Hello";
        $y = "world";
        break;
    case 'fr':
        $x = "Bonjour";
        $y = "monde";
        break;
}

// Задание 6
$n = 3; // Количество строк
$m = 4; // Количество столбцов

// Задание 7
function generateTable($n, $m) {
    $table = "<table border='1'>";
    for ($i = 1; $i <= $n; $i++) {
        $table .= "<tr>";
        for ($j = 1; $j <= $m; $j++) {
            $table .= "<td>Строка $i, Столбец $j</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

// Задание 8
function printTextWithFontSize($text, $size) {
    echo "<p style='font-size: {$size}px;'>$text</p>";
}

// Задание 9
function generateTableFromArray($array) {
    $table = "<table border='1'>";
    foreach ($array as $row) {
        $table .= "<tr>";
        foreach ($row as $cell) {
            $table .= "<td>$cell</td>";
        }
        $table .= "</tr>";
    }
    $table .= "</table>";
    return $table;
}

// Задание 10
if (isset($_GET['n'])) {
    $n = (int)$_GET['n'];
}
if (isset($_GET['m'])) {
    $m = (int)$_GET['m'];
}

if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'add_row':
            $n++;
            break;
        case 'remove_row':
            if ($n > 1) $n--;
            break;
        case 'add_col':
            $m++;
            break;
        case 'remove_col':
            if ($m > 1) $m--;
            break;
    }
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Tasks</title>
</head>
<body>
    <!-- Задание 2 -->
    <h1 style="color: <?php echo $color; ?>;"><?php echo $message; ?></h1>

    <!-- Задание 6 и 7 -->
    <h2>Таблица NxM</h2>
    <?php echo generateTable($n, $m); ?>

    <!-- Задание 8 -->
    <h2>Текст с разным размером шрифта</h2>
    <?php printTextWithFontSize("Пример текста с размером шрифта 16px", 16); ?>
    <?php printTextWithFontSize("Пример текста с размером шрифта 24px", 24); ?>

    <!-- Задание 9 -->
    <h2>Таблица из двумерного массива</h2>
    <?php
    $array = [
        ['A1', 'B1', 'C1'],
        ['A2', 'B2', 'C2'],
        ['A3', 'B3', 'C3']
    ];
    echo generateTableFromArray($array);
    ?>

    <!-- Задание 10 -->
    <h2>Интерактивная таблица</h2>
    <a href="?n=<?php echo $n; ?>&m=<?php echo $m; ?>&action=add_row">Добавить строку</a> |
    <a href="?n=<?php echo $n; ?>&m=<?php echo $m; ?>&action=remove_row">Удалить строку</a> |
    <a href="?n=<?php echo $n; ?>&m=<?php echo $m; ?>&action=add_col">Добавить столбец</a> |
    <a href="?n=<?php echo $n; ?>&m=<?php echo $m; ?>&action=remove_col">Удалить столбец</a>
    <?php echo generateTable($n, $m); ?>
</body>
</html>