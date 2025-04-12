<pre>
<?php 
    $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\'04-12-2025\'&@dataFinalCotacao=\'04-12-2025\'&$top=1&$format=json&$select=cotacaoCompra,dataHoraCotacao';
    var_dump($dados);

    //$cotacao = $dados['value'][0]["cotacaoCompra"];
    //echo "$cotacao"

?>
</pre>