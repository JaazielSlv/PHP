<?php 
    require_once "cliente.php";
    require_once "pedido.php";

    $c = new Cliente( "joao","joao@gmail.com");

    $p = new pedido (12,4500,$c);

    $p->exibirpedido();

?>