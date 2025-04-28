<?php 

class produto
{
    private string $descricao;
    private float $preco;



    public function getdescricao(){
        return $this->descricao;
    }

    public function getpreco(){
        return $this->preco;
    }


    public function setdescricao(string $descricao){
        return $this->descricao = $descricao;
    }

    public function setpreco(float $preco){
        return $this->preco = $preco;
    }



    public function apresentar(){
        echo "O produto {$this->descricao} custa {$this->preco}";
    }




}




?>