<?php

function isPrime($number)
{
    if ($number < 2) return false;
    if ($number == 2) return true;


    $isPrime = true;
    $i = 2;
    while (true) {
        if (($number % $i) == 0) {
            $isPrime = false;
            break;
        }
        if (sqrt($number) <= $i) break;
        $i++;
    }

    return $isPrime;
}


for ($i = 1; $i < 100; $i++) {
    echo "Test bilangan $i adalah " . (isPrime($i) ? "Prima" : "Bukan Prima") . "\n";
}
