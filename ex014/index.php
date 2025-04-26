<?php 
require_once "funcionario.php";
require_once "gerente.php";
require_once "operario.php";

$g = new genrente("alyxandre", 5000, "gerente de projetos");
echo "<br> <hr> <br>";

echo $g->apresentar_funcionario();
echo $g->gerar_bonus();
echo "<br> <hr> <br>";

$o = new operario("diego", 1700, "monitoramento");
echo $o->apresentar_funcionario();
echo $o->gerar_bonus();


?>