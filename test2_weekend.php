<?php
function weekend(string $begin, string $end) : int {
    $beginTimestamp = strtotime($begin);
    $endTimestamp = strtotime($end);
    
    $weekendDays = 0;
    
    for ($i = $beginTimestamp; $i <= $endTimestamp; $i += 86400) { // увеличиваем на 1 день (в секундах)
        if (date('N', $i) >= 6) { // проверяем, является ли день субботой или воскресеньем (6 или 7)
            $weekendDays++;
        }
    }
    
    return $weekendDays;
}

// Пример использования
echo weekend('06.06.2020', '06.06.2020'); // выводит 1