<?php
$info = array(
    1 => array(
        "id" => 1,
        "fullName" => "Phan Vinh Khanh",
        "age" => 27
    )
);

printArray($info);

$info[2] = array(
    "id" => 2,
    "fullName" => "Phan Vinh Tung",
    "age" => 31
);

printArray($info);
function printArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>