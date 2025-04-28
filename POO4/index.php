<?php 
require_once "interfacebase.php";
require_once "pessoa.php";

$p = new pessoa("João", 23);

echo $p->apresentar_pessoa();
echo "<br><hr>";
echo $p->exibir_nome_classe();
echo "<br><hr>";
echo $p->exibir_propriedades();
echo "<br><hr>";
echo $p->exibir_tipo_propriedade();








?>