<?php
function sumOfInverse($n) {
    $result = 0;
    for ($i = 3; $i <= $n; $i += 3) {
        $result += 1/$i;
    }
    return $result;
}

echo sumOfInverse(10);
?>