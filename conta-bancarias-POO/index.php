<?php 

require_once "contabancaria.php";
require_once "contajuridica.php";
require_once "contafisica.php";


$cf = new contafisica("000.000.000-00", "João silva", "1234","21", 5500.00);
echo $cf->extrato();
echo "<br>";
$cf->sacar(500);
echo "<br>";
echo $cf->extrato();
echo "<br>";
$cf->depositar(1000);
echo "<br>";
echo $cf->extrato();
echo "<br>";
$cf->sacar(0);


echo "<br> <hr> <br>";

$cj = new contafisica("00.000.000/0000-00", "Pedro santos", "4321","54", 59500.00);
echo $cj->extrato();
echo "<br>";
$cj->sacar(500);
echo "<br>";
echo $cj->extrato();
echo "<br>";
$cj->depositar(1000);
echo "<br>";
echo $cj->extrato();
echo "<br>";
$cj->sacar(0);
echo "<br> <hr> <br>";












?>