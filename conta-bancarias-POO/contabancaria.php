<?php 

class contabancaria
{
    protected string $titular;
    protected string $numero_conta;
    protected string $agencia; 
    protected float $saldo; 

    function __construct( string $titular, string $numero_conta, string $agencia, string $saldo)
    {
        $this->titular = $titular;
        $this->numero_conta = $numero_conta;
        $this->agencia = $agencia;
        $this->saldo = $saldo;
    }

    function sacar(float $valor)
    {
        if ($valor <= 0 ):
            echo"Valor insuficiente...";
        elseif ($valor > $this->saldo):
            echo"Valor insuficiente...";
        else:
            $this->saldo -= $valor;
            echo "Saque de {$valor} realizado com sucesso novo saldo é de {$this->saldo}";
        endif;

    }

    function depositar (float $valor)
    {
        if ($valor <= 0):
            echo "Valor invalido...";
        endif;
            $this->saldo += $valor;
            echo "Deposito de {$valor} realizado com sucesso seu saldo é de {$this->saldo}";

    }

    function extrato()
    {
        echo "Seu saldo é: ". $this->saldo; 
    }

    function gettitular(){
        return $this->titular;
    }
    function settitular(string $titular){
        return $this->titular = $titular;
    }


    function getnumero_conta(){
        return $this->numero_conta;
    }
    function setnumero_conta(string $numero_conta){
        return $this->numero_conta = $numero_conta;
    }


    function getagencia(){
        return $this->agencia;
    }
    function setagencia(string $agencia){
        return $this->agencia = $agencia;
    }


    function getsaldo(){
        return $this->saldo;
    }
    function setsaldo(string $saldo){
        return $this->saldo = $saldo;
    }







}










?>