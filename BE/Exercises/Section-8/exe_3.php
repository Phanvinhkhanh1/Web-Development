<?php
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

function getInfoById($info, $id)
{
    if (array_key_exists($id, $info)) {
        return printArray($info[$id]);
    }
    return false;
}

function printArray($array)
{
    echo "<pre>";
    print_r($array);
    echo "<pre/>";
}

if (getInfoById($info, 1)) {
    echo getInfoById($info, $id);
}
?>