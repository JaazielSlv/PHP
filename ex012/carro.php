<?php 

class carro 
{
    public string $modelo;
    public $motor;

    public function __construct(string $modelo, int $potencia_motor )
    {
        $this->modelo = $modelo;
        $this->motor = new motor($potencia_motor);
    
    }

    function exibir_detalhes_carro()
    {
        echo "Carro Modelo " . $this->modelo ."<br>";
        $this->motor->apresentar_potencia();
    }
}


?>