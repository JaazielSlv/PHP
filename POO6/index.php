<?php 

require_once "pagamento.php";
require_once "boleto.php";
require_once "cartaocredito.php";
require_once "paypal.php";

$b = new boleto();
$p = new paypal();
$c = new cartaocredito();

processar_pagamento($b, 54.454);
processar_pagamento($p, 765.4);
processar_pagamento($c, 5.4);

function processar_pagamento(pagamento $formade_pagamento, $valor)
{
    $formade_pagamento->pagar($valor);
}
?>