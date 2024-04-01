<?php
function sum($n) {
    $result = 0;
    $index = 0;
    while ($index <= $n) {
        if ($index % 2 == 0) {
            $result += $index;
        }
        $index += 2;
    }
    return $result;
}

echo sum(100);
?>