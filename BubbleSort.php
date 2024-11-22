<?php

function bubbleSortDescending($arr) {
    $cantidad = count($arr);
    for ($i = 0; $i < $cantidad; $i++) {
        for ($j = 0; $j < $cantidad - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
            
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$numeros = [10, -5, 3, 9, -2, 3, 10];
echo "Lista antes de ordenar: ";
print_r($numeros);

$numerosOrdenados = bubbleSortDescending($numeros);
echo "Lista después de ordenar: ";
print_r($numerosOrdenados);
?>
