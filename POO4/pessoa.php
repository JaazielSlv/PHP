<?php 

class pessoa implements interfacebase
{
    public string $nome;
    public int $idade;

    function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function exibir_nome_classe()
    {
        return "Ola eu sou a classe ". __CLASS__ . "<br>";
    }

    function exibir_propriedades()
    {
        $propriedade = get_object_vars($this);
        foreach ($propriedade as $key => $value);
        return "Ola eu sou a classe ". $key . "<br>";
    }

    function exibir_tipo_propriedade()
    {
        $propriedade = get_object_vars($this);
        foreach ($propriedade as $key => $value);
        echo "A propriedade {$key} é do tipo ". gettype($key) ." <br>";
    }

    function apresentar_pessoa()
    {
        return "ola me chamo {$this->nome} e tenho {$this->idade} anos";
    }











}











?>