<?php
function sum($n) {
    $result = 0;
    for ($i = 1; $i <= $n; $i ++) {
        $result += $i / ($i + 1);
    }
    return $result;
}

echo sum(10);
?>