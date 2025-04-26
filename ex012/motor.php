<?php 

class motor
{
    public int $potencia;

    public function __construct(int $potencia)
    {
        $this->potencia = $potencia;
    }

    public function apresentar_potencia()
    {
        echo "Este carro tem potencia de: " . $this->potencia. " Cavalos.";
    }
}




?>