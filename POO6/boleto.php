<?php 

class boleto implements pagamento
{
    function pagar(float $valor)
    {
        echo "Pagamento no valor de {$valor} gerado com sucesso no boleto.<br>";
    }
}












?>