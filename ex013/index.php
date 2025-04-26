<?php 
require_once "carro.php";

$carro = new carro("ford","mustang","2025");

echo $carro->getmarca(). "<br>";
echo $carro->getmodelo(). "<br>";
echo $carro->getano(). "<br>";

echo "<br>" ."<hr>";

$carro->setmarca("NIssan");
$carro->setmodelo("GTR");
$carro->setano("1999");

echo $carro->getmarca(). "<br>";
echo $carro->getmodelo(). "<br>";
echo $carro->getano(). "<br>";


echo "<br>" ."<hr>";
$carro -> exibir_detalhes_carro();



?>