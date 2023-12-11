<?php
function rgb(int $r, int $g, int $b) : int {
    $packedColor = ($r << 16) + ($g << 8) + $b; // сдвигаем биты на нужное количество позиций и складываем их
    
    return $packedColor;
}

// Пример использования
echo rgb(255, 0, 255); // выводит 16711935
