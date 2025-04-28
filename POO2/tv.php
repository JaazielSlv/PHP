<?php 

class tv extends eletronicos{

    private string $modelo;
    
    private int $polegadas;


    function __construct(string $modelo, int $polegadas, string $marca)
    {
        $this->modelo = $modelo;
        $this->polegadas = $polegadas;
        parent:: __construct($marca);
    }

    function getmodelo()
    {
        return $this->modelo;
    }

    function getpolegadas()
    {
        return $this->polegadas;
    }

    function setmodelo(string $modelo)
    {
        return $this->modelo = $modelo;
    }

    function setpolegadas(int $polegadas)
    {
        return $this->polegadas = $polegadas;
    }

    function apresentar()
    {
        echo "A tv da marca {$this->marca} e do modelo {$this->modelo} e tem {$this->polegadas} polegadas ";
    }
}






?>