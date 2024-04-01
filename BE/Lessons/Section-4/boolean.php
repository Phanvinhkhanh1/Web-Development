<?php 
function checkEven($a) {
    if ($a % 2 == 0) {
        return true;
    }
    return false;
}

if (!checkEven((5))) {
    echo "5 is odd number";
}
?>