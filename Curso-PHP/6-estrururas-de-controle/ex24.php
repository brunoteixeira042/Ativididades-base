<?php

$peso1=70;
$peso2=80;
$peso3=90;
$msg = " Pesado de mais ";
$msg_menor = " Peso dentro do limite";

if($peso1>80){
    echo " 1." . $msg;
}else{
    echo $msg_menor;
}
if($peso2>80){
    echo " 2." . $msg;
}else{
    echo $msg_menor;
}
if($peso3>80){
    echo " 3." . $msg;
}else{
    echo $msg_menor;
}