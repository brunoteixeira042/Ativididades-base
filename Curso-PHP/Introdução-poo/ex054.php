<?php

class Pessoa{

  public $nome;
  public $idade;
function andar($m){
       echo " E a andou $m metros... ";        

}
}

$pessa1 = new Pessoa;
$pessa1->nome = "José";
$pessa1->idade = 22;
echo " ". $pessa1->nome;
echo " ". $pessa1->idade . " anos";
$pessa1->andar(100);
