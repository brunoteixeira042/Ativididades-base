<?php

$arrayDiverso = [
    42, // Inteiro
    3.14, // Número decimal (float)
    "Olá, mundo!", // String
    "Mais uma string", // String adicional
    true, // Booleano
    ["maçã", "banana", "cereja"], // Array
    (object)["nome" => "João", "idade" => 25], // Objeto
    "Outra string aqui", // String adicional
    null, // Nulo
    "String final", // String adicional
];

count($arrayDiverso); 
$y=0;

while ($y < count($arrayDiverso)) {
    if (is_string($arrayDiverso[$y])){  
        echo $arrayDiverso[$y]. " ";
    }
    $y++;
};