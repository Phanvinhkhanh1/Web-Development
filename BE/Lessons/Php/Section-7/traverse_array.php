<?php
$listValues = array(1, 2, 23, 4, 5, 7, 9);
$total = 0;
foreach ($listValues as $value) {
    $total += $value;
}
echo "Total : {$total}";

$info = array(
    1 => array(
        "id" => 1,
        "fullName" => "Phan Vinh Khanh",
        "age" => 27
    ),
    2 => array(
        "id" => 2,
        "fullName" => "Phan Vinh Tung",
        "age" => 31
    )
);

printArray($info);
foreach ($info as $item) {
    printArray($item);
}
function printArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}
?>