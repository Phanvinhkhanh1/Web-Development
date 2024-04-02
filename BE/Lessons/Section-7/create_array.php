<?php
// Create empty array
$emptyArray = array();
printArray($emptyArray);

// 1st way to create array
$newArray = array(4,5,7,8,9,0);
printArray($newArray);

// 2nd way to create array
$latestArray = array();
$latestArray['id'] = 1;
$latestArray['fullName'] = "Phan Vinh Khanh";
$latestArray['age'] = 27;
printArray($latestArray);
function printArray($array) {
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>