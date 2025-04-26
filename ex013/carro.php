<?php 

class carro{
    private string $modelo;

    private string $marca;

    private string $ano;

    function __construct(string $modelo, string $marca, string $ano)
    {
        $this->modelo = $modelo;
        $this->marca = $marca;
        $this->ano = $ano;
    }
    public function getmarca()
    {
        return $this->marca;
    }
    public function getmodelo()
    {
        return $this->modelo;
    }
    public function getano()
    {
        return $this->ano;
    }

    public function setmarca($m) {
        return $this->marca = $m;
    }
    public function setmodelo($mod) {
        return $this->modelo = $mod;
    }
    public function setano($a) {
        return $this->ano = $a;
    }



    function exibir_detalhes_carro()
    {
        echo "O carro ", $this->modelo. "é da marca ". $this->marca. " do ano ". $this->ano;
    }

}


?>