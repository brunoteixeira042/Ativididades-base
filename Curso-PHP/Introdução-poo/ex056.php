<?php

class Humano{
  private $nome;
  private $idade;
  private $altura;

  function setNome($nome){  
    $this->nome = $nome;
  }
  function getNome(){
    return $this->nome;
  }
  function setidade($idade){
    $this->idade = $idade;
  }
  function getidade(){
    $this->idade;
  }
  function setAltura($altura){
    $this->altura = $altura;
  }
  function getAltura(){
    return $this->altura;
  }

  function falar(){
    return "estou falando...";
  }
}

class Professor extends Humano{
  private $matricula;
  private $salario;

  function avaliar(){
    return "estou avaliando";
  }
}

$professor = new Professor;
$professor->setNome("josé");
$professor->setidade(29);
$professor->setAltura(1.75);

echo " ".$professor->getNome() ." ". $professor->falar(). " ". $professor->avaliar();