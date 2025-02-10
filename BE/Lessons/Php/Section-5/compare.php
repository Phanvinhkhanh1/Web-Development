<?php
$a = 100;
$b = 95;

if ($a <> $b) {
    echo "{$a} != {$b}";
    echo "<br>";
}

if ($a > $b) {
    echo "{$a} > {$b}";
} else if ($a < $b) {
    echo "{$a} < {$b}";
} else {
    echo "{$a} = {$b}";
}
?>