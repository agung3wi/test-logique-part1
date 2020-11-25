<?php

$bilangan = array(11, 6, 31, 201, 99, 861, 1, 7, 14, 79);

$max = $bilangan[0];
for ($i = 1; $i < count($bilangan); $i++) {
    if ($bilangan[$i] > $max)
        $max = $bilangan[$i];
}


echo "Bilangan terbesarnya adalah $max";
