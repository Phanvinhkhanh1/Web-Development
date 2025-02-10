<?php
$a = 100;
$b = 200;
function sum() {
    return $GLOBALS['a'] + $GLOBALS['b'];
}

echo sum();
?>