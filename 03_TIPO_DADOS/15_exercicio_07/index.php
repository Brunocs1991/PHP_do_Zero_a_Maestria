<?php

$pessoa = [
    'nome' => 'Bruno',
    'idade' => 11,
    'profissao' => 'programador',
    'graduacao' => 'sistemas da informacao'
];
$maioridade = 18;

//desafio
if ($pessoa['idade'] >= $maioridade) {
    echo 'A Pessoa é maior de idade!';
}
