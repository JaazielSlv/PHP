<?php 

class funcionario 
{
    protected string $nome;
    protected float $salario;

    public function __construct( $nome, $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }


    protected function calcular_bonus()
    {
        return $this->salario * 0.10;
    }

    function apresentar_funcionario()
    {
        return "Nome do funcionario é ". $this->nome. " com o salario ". $this->salario;
    }

}

?>