<?php 

class moto extends veiculo
{


    function acelerar()
    {
        echo "A moto da marca {$this->marca} do modelo {$this->modelo} esta acelerando a 100km/h <br>";
    }

    function frear()
    {
        echo "A moto da marca {$this->marca} do modelo {$this->modelo} esta freando <br>";
    }

}

















?>