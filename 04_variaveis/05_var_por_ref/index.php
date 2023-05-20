<?php

$x = 10;
$y = & $x;

echo $x;
echo "<br>";

echo $y;
echo "<br>";
$y = 15;
echo "Atribuido valor apos ref";

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$x = 20;

echo "Atribuid valor apos ref 2";

echo "<br>";
echo $x;
echo "<br>";
echo $y;
echo "<br>";

$nome = "Bruno";
$nome2 =$nome;

echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
$nome2 = "joao";
echo $nome;
echo "<br>";
echo $nome2;
echo "<br>";
