<?php

function mergeSort($arr) {
    if (count($arr) <= 1) {
        return $arr;
    }


    $middle = floor(count($arr) / 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);


    return merge(mergeSort($left), mergeSort($right));
}

function merge($left, $right) {
    $resultado = [];
    $i = $j = 0;


    while ($i < count($left) && $j < count($right)) {
        if ($left[$i] < $right[$j]) {
            $resultado[] = $left[$i++];
        } else {
            $resultado[] = $right[$j++];
        }
    }


    return array_merge($resultado, array_slice($left, $i), array_slice($right, $j));
}

$palabras = ["papas", "fideos", "pollo", "carne"];
echo "Lista antes de ordenar: ";
print_r($palabras);

$palabrasOrdenadas = mergeSort($palabras);
echo "Lista después de ordenar: ";
print_r($palabrasOrdenadas);
?>
