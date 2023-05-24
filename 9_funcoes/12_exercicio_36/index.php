<?php

$arr = [];

for($i = 0; $i <= 30; $i++) {

    $arr[] = $i;

}

// print_r($arr);

function arrayMaiorQueSete($array) {

    $arrayRetorno = [];

    for($j = 0; $j < count($array); $j++) {

        if($array[$j] > 7) {

            $arrayRetorno[] = $array[$j];

        }

    }

    return $arrayRetorno;

}

$novoArray = arrayMaiorQueSete($arr);

print_r($novoArray);