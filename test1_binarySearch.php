<?php

function binarySearch(array $data, int $number): int {
    $left = 0;
    $right = count($data) - 1;

    while ($left <= $right) {
        $mid = $left + floor(($right - $left) / 2);

        if ($data[$mid] === $number) {
            return $mid; // Найден искомый элемент, возвращаем индекс
        } elseif ($data[$mid] < $number) {
            $left = $mid + 1; // Искомый элемент находится в правой части
        } else {
            $right = $mid - 1; // Искомый элемент находится в левой части
        }
    }

    return -1; // Элемент не найден
}

// Пример использования
$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numberToFind = 6;
$result = binarySearch($data, $numberToFind);

if ($result !== -1) {
    echo "Элемент $numberToFind найден в массиве. Индекс: $result";
} else {
    echo "Элемент $numberToFind отсутствует в массиве.";
}

?>
