<?php
$myArray = array(
    "id" => 1,
    "fullName" => "Phan Vinh Khanh",
    "age" => 26
);

printArray($myArray);

$myArray['age'] = 27;
printArray($myArray);
function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>