<?php

abstract class Clientes
{
    protected $nome;
    protected $quantidade;
    protected $preco;
    protected $desconto;
    protected $valor_total;

    function __construct(string $nome, string $quantidade, float $preco, float $desconto = 0, float $valor_total = 0)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->preco = $preco;
        $this->desconto = $desconto;
        $this->valor_total = $valor_total;
    }

    abstract public function tipo(): string;

    function comum(){
        echo "{$this->nome} gastou um total de R$ {$this->valor_total} (sem desconto).<br>";
    }

    function premium(){

        echo "{$this->nome} gastou um total de R$ {$this->valor_total} (com desconto).<br>";
    }

    function comprado(){
        echo "O {$this->tipo()} {$this->nome} comprou {$this->quantidade} itens.<br>";
    }

}

class Cliente_C extends Clientes {
    public function tipo(): string {
        return "Cliente Comum";
    }

     public function total(): void {
        $this->valor_total = $this->preco * $this->quantidade;
    }
}

class Cliente_Premium extends Clientes {
    public function tipo(): string {
        return "Cliente Premium";
    }

    
    public function aplicarDesconto(): void {
        $valor_base = $this->preco * $this->quantidade;
        $this->desconto = $valor_base * 0.20;
        $this->valor_total = $valor_base - $this->desconto;
    }

}

class Produto extends Clientes {
    public function tipo(): string {
        return "produto";
    }
}


$joao = new Cliente_Premium("Jorge", "10", 20.0);

$roberto = new Cliente_C("adolfo", "7", 30.0);

$joao->aplicarDesconto();
$joao->comprado();
$joao->premium();

$roberto->total();
$roberto->comprado();
$roberto->comum();
