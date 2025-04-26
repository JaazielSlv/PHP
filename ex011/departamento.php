<?php 

class departamento
{
    public string $nome_departamento;
    public $funcionarios = [];

    public function __construct(string $nome_departamento)
    {
        $this->nome_departamento = $nome_departamento;

    }

    public function adicionar_funcionarios(funcionario $funcionario) {
        $this->funcionarios[] = $funcionario;

    }
    public function listar_funcionarios ()
    {
        echo "Funcionariosdo departamento ". $this->nome_departamento. "<br>";
        foreach($this->funcionarios as $funcionario){
            echo "". $funcionario->nome." Cargo {$funcionario->cargo}". "<br>";
        }
    }

}


?>