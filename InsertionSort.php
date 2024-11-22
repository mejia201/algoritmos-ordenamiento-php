<?php

function insertionSort($arr) {
    $total = count($arr);

    for ($i = 1; $i < $total; $i++) {
        $key = $arr[$i];
        $j = $i - 1;


        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j = $j - 1;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$nombres = ["Bryan", "Steven", "Fatima", "Jazmine"];
echo "Lista antes de ordenar: ";
print_r($nombres);

$nombresOrdenados = insertionSort($nombres);
echo "Lista después de ordenar: ";
print_r($nombresOrdenados);
?>
