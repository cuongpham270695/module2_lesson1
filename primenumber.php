<?php
function checkPrime($num)
{
    if ($num < 2) {
        return false;
    } else {
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                return false;
            }
        }
    }
    return true;
}

for ($i = 1; $i < 100; $i++) {
    if (checkPrime($i)) {
        echo $i . " ";
    }
}