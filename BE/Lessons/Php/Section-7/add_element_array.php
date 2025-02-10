<?php 
$originArray = array(
    "id" => 1,
    "fullName" => "Phan Vinh Khanh"
);
printArray($originArray);
//add new element into originalArray
$originArray['age'] = 27;
printArray($originArray);

$array = array(5,6,7,8,9,10);
printArray($array);
// add new element by default key
$array[] = 11;
printArray($array);
function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>