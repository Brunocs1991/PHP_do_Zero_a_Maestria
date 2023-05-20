<?php

$carro = [
    'marca' => 'bmw',
    'rodas' => 4,
    'teto_solar' => true,
    'velocidade_max' => 300,
    'blindado' => true
];
print_r($carro);
$marca = $carro['marca'];
$velicidade_maxima = $carro['velocidade_max'];
echo "<br>";
echo "O carro e da marca $marca e atinge o maximo $velicidade_maxima km/h";
