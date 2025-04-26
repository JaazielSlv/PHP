<?php 

class Pedido
{
    public int $numero_pedido;

    public float $valor;

    public $cliente;

    public function __construct(int $numero_pedido, float $valor,Cliente $cliente)
    {
        $this->numero_pedido = $numero_pedido;
        $this->valor = $valor;
        $this->cliente = $cliente;

    }
    public function exibirpedido()
    {
        echo "Numero do pedido". $this->numero_pedido."<br>";
        echo "valor pedido". $this->valor."<br>";
        echo "Cliente". $this->cliente->nome."<br>";
        echo "Email cliente". $this->cliente->email."<br>";
    }
}

?>