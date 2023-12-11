<?php 
function fiborow(int $limit) : string {
    $fibArray = [0, 1]; // начальные элементы последовательности Фибоначчи
    $i = 2;
    
    while (true) {
        $nextFib = $fibArray[$i - 1] + $fibArray[$i - 2]; // вычисляем следующий элемент последовательности
        if ($nextFib > $limit) {
            break; // если следующий элемент больше limit, то прекращаем цикл
        }
        $fibArray[] = $nextFib; // добавляем следующий элемент в массив
        $i++;
    }
    
    return implode(' ', $fibArray); // объединяем элементы массива в строку с разделителем пробелом
}

// Пример использования
echo fiborow(10); // выводит "0 1 1 2 3 5 8"