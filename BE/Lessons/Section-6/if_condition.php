<?php
$a = 9;
if ($a < 4) {
    echo "F";
} else if ($a < 5.5) {
    echo "D";
} else if ($a < 7) {
    echo "C";
} else if ($a < 8) {
    echo "B";
} else if ($a < 9) {
    echo "A";
} else if ($a < 10) {
    echo "A+";
} else {
    echo "Invalid score";
}
?>