<?php

$num1= 20;
$num2 = 80;
$texto ="teste";

if(is_numeric($num1)){
    $novoNumero = $num1*2;
    if($novoNumero>100)
        echo " 1.ele é maior que 100";
}else{
    echo "Não é número";
}

if(is_numeric($num2)){
    $novoNumero = $num2*2;
    if($novoNumero>100)
        echo "2.ele é maior que 100";
}else{
    echo "Não é número";
}

if(is_numeric($texto)){
    $novoNumero = $texto*2;
    if($novoNumero>100)
        echo "2.ele é maior que 100";
}else{
    echo " Não é número";
}
