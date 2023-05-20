<?php

class Pessoa
{
    function falar()
    {
        echo "Ola pessoas";
    }
}

$bruno = new Pessoa();
$bruno->nome = "Bruno";

echo $bruno->nome;

echo '<br>';
$bruno->falar();
