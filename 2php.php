<?php
// Задание 1
if (isset($_POST['size1'])) {
    $size1 = (int)$_POST['size1'];
    $array1 = [];
    for ($i = 0; $i < $size1; $i++) {
        $array1[] = rand(1, 100);
    }

    echo "<h3>Массив 1:</h3>";
    echo implode(", ", $array1);

    $sum = array_sum($array1);
    $average = $sum / $size1;
    $product = array_product($array1);

    echo "<p>Сумма: $sum</p>";
    echo "<p>Среднее арифметическое: $average</p>";
    echo "<p>Произведение: $product</p>";
}

// Задание 2
if (isset($_POST['size2'])) {
    $size2 = (int)$_POST['size2'];
    $array2 = [];
    for ($i = 0; $i < $size2; $i++) {
        $array2[] = rand(1, 100);
    }

    echo "<h3>Массив 2:</h3>";
    echo implode(", ", $array2);

    for ($i = 0; $i < $size2; $i++) {
        if ($array2[$i] % 2 == 0) {
            $array2[$i] *= 2;
        } else {
            $array2[$i] *= $array2[$i];
        }
    }

    echo "<h3>Измененный массив 2:</h3>";
    echo implode(", ", $array2);
}

// Задание 3
if (isset($_POST['size3'])) {
    $size3 = (int)$_POST['size3'];
    $array3 = [];
    for ($i = 0; $i < $size3; $i++) {
        $array3[] = rand(1, 100);
    }

    echo "<h3>Массив 3:</h3>";
    echo implode(", ", $array3);

    $array3 = array_filter($array3, function($value) {
        return $value % 2 != 0;
    });

    echo "<h3>Массив 3 без чётных элементов:</h3>";
    echo implode(", ", $array3);
}

// Задание 4
if (isset($_POST['size4'])) {
    $size4 = (int)$_POST['size4'];
    $array4 = [];
    for ($i = 0; $i < $size4; $i++) {
        $array4[] = rand(1, 100);
    }

    echo "<h3>Массив 4:</h3>";
    echo implode(", ", $array4);

    $n = count($array4);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($array4[$j] > $array4[$j + 1]) {
                $temp = $array4[$j];
                $array4[$j] = $array4[$j + 1];
                $array4[$j + 1] = $temp;
            }
        }
    }

    echo "<h3>Отсортированный массив 4:</h3>";
    echo implode(", ", $array4);
}

// Задание 5
if (isset($_POST['size5'])) {
    $size5 = (int)$_POST['size5'];
    $array5 = [0, 1];
    for ($i = 2; $i < $size5; $i++) {
        $array5[] = $array5[$i - 1] + $array5[$i - 2];
    }

    echo "<h3>Массив Фибоначчи:</h3>";
    echo implode(", ", $array5);
}

// Задание 6
if (isset($_POST['size6'])) {
    $size6 = (int)$_POST['size6'];
    $array6 = [];
    $factorial = 1;
    for ($i = 0; $i < $size6; $i++) {
        if ($i > 0) {
            $factorial *= $i;
        }
        $array6[] = $factorial;
    }

    echo "<h3>Массив факториалов:</h3>";
    echo implode(", ", $array6);
}

// Задание 7
if (isset($_POST['size7'])) {
    $size7 = (int)$_POST['size7'];
    $array7 = [];
    for ($i = 0; $i < $size7; $i++) {
        $array7[] = rand(1, 100);
    }

    echo "<h3>Массив 7:</h3>";
    echo implode(", ", $array7);

    $string7 = implode(", ", $array7);

    echo "<h3>Строка из массива 7:</h3>";
    echo $string7;
}

// Задание 8
if (isset($_POST['string8'])) {
    $string8 = $_POST['string8'];
    $array8 = explode(",", $string8);

    echo "<h3>Массив из строки:</h3>";
    echo implode(", ", $array8);
}

// Задание 9
if (isset($_POST['size9']) && isset($_POST['n']) && isset($_POST['m'])) {
    $size9 = (int)$_POST['size9'];
    $n = (int)$_POST['n'];
    $m = (int)$_POST['m'];
    $array9 = [];
    for ($i = 0; $i < $size9; $i++) {
        $array9[] = rand(1, 100);
    }

    echo "<h3>Массив 9:</h3>";
    echo implode(", ", $array9);

    $slicedArray = array_slice($array9, $m, $n);

    echo "<h3>Вырезанные элементы:</h3>";
    echo implode(", ", $slicedArray);
}

// Задание 10
if (isset($_POST['size10_1']) && isset($_POST['size10_2'])) {
    $size10_1 = (int)$_POST['size10_1'];
    $size10_2 = (int)$_POST['size10_2'];
    $array10_1 = [];
    $array10_2 = [];
    for ($i = 0; $i < $size10_1; $i++) {
        $array10_1[] = rand(1, 100);
    }
    for ($i = 0; $i < $size10_2; $i++) {
        $array10_2[] = rand(1, 100);
    }

    echo "<h3>Массив 10_1:</h3>";
    echo implode(", ", $array10_1);
    echo "<h3>Массив 10_2:</h3>";
    echo implode(", ", $array10_2);

    $resultArray = [];
    $maxSize = max($size10_1, $size10_2);
    for ($i = 0; $i < $maxSize; $i++) {
        $value1 = isset($array10_1[$i]) ? $array10_1[$i] : 0;
        $value2 = isset($array10_2[$i]) ? $array10_2[$i] : 0;
        $resultArray[] = $value1 + $value2;
    }

    echo "<h3>Результат сложения массивов:</h3>";
    echo implode(", ", $resultArray);
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP Tasks</title>
</head>
<body>
    <h2>Задание 1</h2>
    <form method="post">
        <label for="size1">Размер массива:</label>
        <input type="number" name="size1" id="size1" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 2</h2>
    <form method="post">
        <label for="size2">Размер массива:</label>
        <input type="number" name="size2" id="size2" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 3</h2>
    <form method="post">
        <label for="size3">Размер массива:</label>
        <input type="number" name="size3" id="size3" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 4</h2>
    <form method="post">
        <label for="size4">Размер массива:</label>
        <input type="number" name="size4" id="size4" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 5</h2>
    <form method="post">
        <label for="size5">Размер массива:</label>
        <input type="number" name="size5" id="size5" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 6</h2>
    <form method="post">
        <label for="size6">Размер массива:</label>
        <input type="number" name="size6" id="size6" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 7</h2>
    <form method="post">
        <label for="size7">Размер массива:</label>
        <input type="number" name="size7" id="size7" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 8</h2>
    <form method="post">
        <label for="string8">Строка с числами через запятую:</label>
        <input type="text" name="string8" id="string8" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 9</h2>
    <form method="post">
        <label for="size9">Размер массива:</label>
        <input type="number" name="size9" id="size9" required>
        <label for="n">Количество элементов для вырезания:</label>
        <input type="number" name="n" id="n" required>
        <label for="m">Начальный индекс:</label>
        <input type="number" name="m" id="m" required>
        <button type="submit">Создать массив</button>
    </form>

    <h2>Задание 10</h2>
    <form method="post">
        <label for="size10_1">Размер первого массива:</label>
        <input type="number" name="size10_1" id="size10_1" required>
        <label for="size10_2">Размер второго массива:</label>
        <input type="number" name="size10_2" id="size10_2" required>
        <button type="submit">Создать массивы</button>
    </form>
</body>
</html>