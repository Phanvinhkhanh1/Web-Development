<?php
$myArray = array(
    "id" => 1,
    "fullName" => "Phan Vinh Khanh",
    "age" => 27
);

printArray($myArray);

unset($myArray['age']);

printArray($myArray);
function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>