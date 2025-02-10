<?php 
$a = 100;
echo solution($a);
function solution($a) {
    if (($a > 0) && ($a % 2 == 0)) {
        $a ++;
    }
    return $a;
}
?>