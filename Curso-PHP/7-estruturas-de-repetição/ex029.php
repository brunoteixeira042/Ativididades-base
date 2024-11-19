<?php

$arr=[10,20,30,40,50,60,70,80,90,100];

$i=0;

$tamanho=count($arr);

while($i < $tamanho) {

    if($arr[$i]==30|| $arr[$i]==40){
        $i++;
        continue;
        
    }
    echo " ".$arr[$i];
    $i++;
}