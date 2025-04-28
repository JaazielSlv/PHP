<?php 

class contafisica extends contabancaria
{
    private string $cpf;

    function __construct(string $cpf, string $titular,string $numero_conta, string $agencia, string $saldo)
    {
    $this->cpf = $cpf;
    parent::__construct($titular,$numero_conta, $agencia, $saldo);
    }

    public function getcpf()
    {
        return $this->cpf;
    }

    public function setcpf($cpf)
    {
        $this->cpf = $cpf;

        return $this->cpf;
    }
}










?>