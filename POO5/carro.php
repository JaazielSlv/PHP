<?php 

class carro extends veiculo
{
    function __construct($marca, $modelo, $ano)
    {
        parent::__construct($marca, $modelo, $ano);
    }

    function acelerar()
    {
        echo "O carro da marca {$this->marca} do modelo {$this->modelo} esta acelerando a 100km/h <br>";
    }

    function frear()
    {
        echo "O carro da marca {$this->marca} do modelo {$this->modelo} esta freando <br>";
    }

}








?>