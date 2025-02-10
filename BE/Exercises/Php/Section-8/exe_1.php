<?php
// function to print if $n is even , or else per line
function checkEven($n) {
    if ($n % 2 == 0) {
        echo "{$n} is even number";
    } else {
        echo "{$n} is odd number";
    }
}

checkEven(10);
echo "<pre>";

// function return boolean value whether $n is even 

function checkEventLatest($n) {
    if ($n % 2 == 0) {
        return true;
    }
    return false;
}

$m = 100;
if (checkEventLatest($m)) {
    echo "{$m} is even number";
} else {
    echo "{$m} is odd number";
}
?>