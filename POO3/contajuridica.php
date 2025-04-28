<?php 

class contajuridica extends contabancaria
{
    private string $cnpj;

    function __construct(string $cnpj, string $titular,string $numero_conta, string $agencia, string $saldo)
    {
        $this->cnpj = $cnpj;
        parent::__construct($titular,$numero_conta, $agencia, $saldo);
    }

    
    public function getcnpj()
    {
        return $this->cnpj;
    }

    public function setcnpj($cnpj)
    {
        $this->cnpj = $cnpj;

        return $this;
    }
}










?>