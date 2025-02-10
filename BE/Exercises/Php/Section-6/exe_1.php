<?php
function sumOfEvenNumber($n) {
    $result = 0;
    for ($i = 2; $i <= $n; $i += 2) {
        $result += $i;
    }
    return $result;
}

echo sumOfEvenNumber(10);
?>