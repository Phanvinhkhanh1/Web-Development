<?php
$day = 6;
$result;
switch ($day) {
    case 2:
        $result = "Monday";
        break;
    case 3:
        $result = "Tuesday";
        break;
    case 4:
        $result = "Wednesday";
        break;
    case 5:
        $result = "Thursday";
        break;   
    case 6:
        $result = "Friday";
        break;
    case 7:
        $result = "Saturday";
        break;
    case 8:
        $result = "Sunday";
        break;
    default:
        $result = "Invalid day";
        break;
}
echo $result;
?>