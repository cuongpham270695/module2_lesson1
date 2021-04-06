<?php
for ($i = 0; $i <= 7; $i++) {
    for ($j = 7; $j > $i; $j--) {
        echo '&nbsp;&nbsp;';
    }
    for ($k = 0; $k < $i; $k++) {
        echo "*&nbsp&nbsp;";
    }
    echo "<br>";
}