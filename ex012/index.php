<?php 

require_once "carro.php";
require_once "motor.php";


$carro = new carro("Camaro", 1500);

$carro ->exibir_detalhes_carro();

echo "<br> <hr> <br>";

$carro2 = new carro("fusca", 100);

$carro2 -> exibir_detalhes_carro()




?>