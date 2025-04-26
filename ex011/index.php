<?php 
require_once "funcionario.php";
require_once "departamento.php";

$f1 = new funcionario("Joao", "Supervisor");
$f2 = new funcionario("maria", "gerente");
$f3 = new funcionario("thiago", "analista");
$f4 = new funcionario("diego", "operador");

$d = new departamento("T.i");
$d->adicionar_funcionarios($f1);
$d->adicionar_funcionarios($f2);
$d->adicionar_funcionarios($f3);
$d->adicionar_funcionarios($f4);

$d->listar_funcionarios();





?>