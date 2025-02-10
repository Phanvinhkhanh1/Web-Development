<?php
function check_prime($n)
{
    if ($n <= 1) {
        return false;
    }
    if ($n == 3) {
        return true;
    }
    for ($index = 2; $index <= sqrt($n); $index++) {
        if ($n % $index == 0) {
            return false;
        }
    }
    return true;
}

function total_prime($n)
{
    $total = 0;
    for ($index = 1; $index <= $n; $index ++) {
        if (check_prime($index)) {
            $total += $index;
        }
    }
    return $total;
}

echo total_prime(100);
?>