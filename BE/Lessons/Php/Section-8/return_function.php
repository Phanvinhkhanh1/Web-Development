<?php
function sum($n) {
    $result = 0;
    for ($i = 0; $i <= $n; $i ++) {
        $result += $i;
    }
    return $result;
}

echo sum(100);
?>