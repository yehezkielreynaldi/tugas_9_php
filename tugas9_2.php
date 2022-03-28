<?php
for ($i = 1; $i <= 200; $i++) {     // for 1, adalah bilangan yang akan di cek

    $t = 0;

    for ($j = 1; $j <= $i; $j++) {

        if ($i % $j == 0) {
            $t++;
        }
    }

    if ($t == 2) {
        echo "" . $i . ",";
    }
}