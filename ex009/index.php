<?php 
require_once "pessoa.php";

$p = new pessoa("joao",26);

echo $p->nome. " tem ". $p->idade. " Anos";
echo "<br> <hr <br>";
echo $p->apresentar();
echo "<br> <hr <br>";

var_dump($p);

?>