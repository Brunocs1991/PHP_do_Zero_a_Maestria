<?php

function teste($a = "teste"): void
{

    echo "O valor de A é: $a <br>";

}

teste();
teste("asd");

function testando($b, $a = "x"): void
{

    echo "O valor de a é: $a e de b é: $b <br>";

}

testando("1");
testando("1", "2");