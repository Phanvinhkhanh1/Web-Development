<?php
function calculateSumMultiArg()
{
    $result = 0;
    $listArgs = func_get_args();
    if (is_array($listArgs)) {
        foreach ($listArgs as $arg) {
            $result += $arg;
        }
    }
    return $result;
}

echo calculateSumMultiArg(1, 2, 23, 5, 6);
?>