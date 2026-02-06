<?php

abstract class Clientes
{
    protected $nome;
    protected $quantidade;
    protected $desconto;
    protected $valor_total;
    protected $estado;
    public $p1;
    public $p2;
    public $p3;
    public $qp1 = 0;
    public $qp2 = 0;
    public $qp3 = 0;

    function __construct(string $nome, string $estado, float $qp1 = 0, float $qp2 = 0, float $qp3 = 0, float $desconto = 0, float $p1 = 5.99, float $p2 = 15.99, float $p3 = 20.99, $valor_total = 0, float $quantidade = 0)
    {
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->desconto = $desconto;
        $this->valor_total = $valor_total;
        $this->estado = $estado;
        $this->p1 = $p1;
        $this->p2 = $p2;
        $this->p3 = $p3;
        $this->qp1 = $qp1;
        $this->qp2 = $qp2;
        $this->qp3 = $qp3;
    }



    abstract public function tipo(): string;

    function comum()
    {

        echo "{$this->nome} gastou um total de R$" . number_format($this->valor_total, 2, ',', '');
        echo "(sem desconto).<br>";
    }

    function premium()
    {

        echo "{$this->nome} gastou um total de R$" . number_format($this->valor_total, 2, ',', '');
        echo "(com desconto)<br>";
    }

    function estado()
    {
        echo "A compra foi {$this->estado}. <br> <br>";
    }
    function Aberto()
    {
        echo "Sua compra esta em {$this->estado}.<br>";
        echo "Verifique se você pagou os R$ {$this->valor_total}.<br><br>";
    }
    function cancelado()
    {
        echo "Sua compra foi {$this->estado}<br> Aqui esta seus R$ " . number_format($this->valor_total, 2, ',', '');
        echo "<br><br>";
    }
    function Enviado()
    {
        echo "Sua compra foi {$this->estado}<br><br>";
    }
}

class Cliente_C extends Clientes
{
    public function tipo(): string
    {
        return "Cliente Comum";
    }
    public function soma(): void
    {
        $this->quantidade = $this->qp1 + $this->qp2 + $this->qp3;
    }
    public function total(): void
    {
        $this->soma();
        $this->valor_total = ($this->p1 * $this->qp1) + ($this->p2 * $this->qp2) + ($this->p3 * $this->qp3);
    }

    function comprado()
    {
        echo "O {$this->tipo()} {$this->nome} comprou {$this->quantidade} itens.<br>";
    }
}

class Cliente_Premium extends Clientes
{
    public function tipo(): string
    {
        return "Cliente Premium";
    }
    function soma(): void
    {
        $this->quantidade = $this->qp1 + $this->qp2 + $this->qp3;
    }

    public function aplicarDesconto(): void
    {
        $this->soma();
        $valor_base = ($this->p1 * $this->qp1) + ($this->p2 * $this->qp2) + ($this->p3 * $this->qp3);
        $this->desconto = $valor_base * 0.10;
        $this->valor_total = $valor_base - $this->desconto;
    }

    function comprado()
    {
        echo "O {$this->tipo()} {$this->nome} comprou {$this->quantidade} itens.<br>";
    }
}

class Produto extends Clientes
{
    public function tipo(): string
    {
        return "produto";
    }
}


$joao = new Cliente_Premium("Joao", "Pago", 5);

$japa = new Cliente_Premium("iwamoto", "Enviado", 3, 4, 3);

$marcio = new Cliente_C("marcio", "Aberto", 3, 0, 3,);

$roberto = new Cliente_C("roberto", "Cancelada", 0, 4, 3);

$joao->aplicarDesconto();
$joao->comprado();
$joao->premium();
$joao->estado();

$roberto->total();
$roberto->comprado();
$roberto->comum();
$roberto->cancelado();

$marcio->total();
$marcio->comprado();
$marcio->comum();
$marcio->Aberto();

$japa->aplicarDesconto();
$japa->comprado();
$japa->comum();
$japa->Enviado();
