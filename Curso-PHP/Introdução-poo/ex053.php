<?php

class Cachorro{

    function latir(){
        echo "Latindo... ";
    }

    function andar(){
       echo "andando... ";        

    }
}

$pitbull = new Cachorro;

$pastorAlemao = new Cachorro;

$pitbull -> latir();
$pastorAlemão->andar();