<?php


$bilangan = array(99, 2, 64, 8, 111, 33, 65, 11, 102, 50);


for ($i = 1; $i < count($bilangan); $i++) {
    for ($j = count($bilangan) - 1; $j >= $i; $j--) {
        if ($bilangan[$j] < $bilangan[$j - 1]) {
            $temp = $bilangan[$j];
            $bilangan[$j] = $bilangan[$j - 1];
            $bilangan[$j - 1] = $temp;
        }
    }
}
print_r($bilangan);
