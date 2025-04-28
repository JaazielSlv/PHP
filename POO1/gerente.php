<?php 



class genrente extends funcionario
{

    private string $cargo;

    public function __construct(string $nome, string $salario, string $cargo)
    {
        parent:: __construct($nome, $salario);
        $this->cargo = $cargo;
    }

    public function gerar_bonus()
    {
        $bonus = $this->calcular_bonus();
        return "$this->nome recebera um salario de $this->salario e um bonus de $bonus ";
    }

}



?>