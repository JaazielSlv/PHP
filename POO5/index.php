<?php 
require_once "veiculo.php";
require_once "carro.php";
require_once "moto.php";

$c = new carro("ford", "muntag", "2025");

$c->acelerar();
$c->frear();

echo "<br> <hr> <br>";

$m = new moto("honda", "fan", "2020");

$m->acelerar();
$m->frear();









?>