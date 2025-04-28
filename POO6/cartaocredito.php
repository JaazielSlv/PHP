<?php 

class cartaocredito implements pagamento
{
    function pagar(float $valor)
    {
        echo "Pagamento no valor de {$valor} gerado com sucesso no cartão de credito.<br>";
    }
}











?>