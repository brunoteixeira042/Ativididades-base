<?php

class Carro{

  public $nome;
  public $marca;
  public $velocidadeMaxima;
  function setVelocidade($velocidade){
    $this-> velocidadeMaxima = $velocidade;
  }
    function getVelocidade() {
      return $this->velocidadeMaxima;
  }
}

$uno= new Carro;
$uno->nome = "Uno";
$uno->marca = "Fiat";
$uno->setVelocidade(100);

echo " ". $uno->nome ." ". $uno -> getVelocidade() ;