<?php
$oddNumbers= array();
for ($i = 3; $i <= 150; $i += 2) {
    $oddNumbers[] = $i;
}

printArray($oddNumbers);
function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>