<?php 

class paypal implements pagamento
{
    function pagar(float $valor)
    {
        echo "Pagamento no valor de {$valor} gerado com sucesso no paypal.<br>";
    }
}







?>