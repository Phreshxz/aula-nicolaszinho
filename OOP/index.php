<?php

class Automovel
{
    public $marca;
    public $portas;
    public $nome;
    public $rodas;

    function __construct(string $marca, string $portas, string $nome, string $rodas)
    {
        $this->marca = $marca;
        $this->portas = $portas;
        $this->nome = $nome;
        $this->rodas = $rodas;
    }

    function acelerar()
    {
        echo "{$this->nome} ta acelerando <br>";
    }
    function modelo()
    {
        echo "a marca do {$this->nome} é {$this->marca} <br>";
    }
    function porta()
    {
        echo "ele tem {$this->portas} portas <br> ------------ <br>";
    }
}

$carro = new Automovel("volkswagen", 2, "fusca", 4);

$carro->acelerar();
$carro->modelo();
$carro->porta();

$moto = new Automovel("yamaha", 0, 'scooter', 2);

$moto->acelerar();
$moto->modelo();
$moto->porta();

$onibus = new Automovel("merceds", 5, 'laranjao', 12);

$onibus->acelerar();
$onibus->modelo();
$onibus->porta();



class animal
{
    public $raca;
    public $patas;
    public $alimento;
    public $habitat;

    function __construct(string $raca, string $patas, string $alimento, string $habitat)
    {
        $this->raca = $raca;
        $this->patas = $patas;
        $this->alimento = $alimento;
        $this->habitat = $habitat;
    }

    function racas()
    {
        echo "{$this->raca} come {$this->alimento}<br>";
    }
    function habitats()
    {
        echo "a habitat do {$this->raca} é {$this->habitat} <br>";
    }
    function patas()
    {
        echo "ele tem {$this->patas} patas <br> ------------ <br>";
    }
}

$cachorro = new animal("caramelo", 4, "racao", "casas");

$cachorro->racas();
$cachorro->habitats();
$cachorro->patas ();

$hiena = new animal("hiena", 4, 'carnica', "savana");

$hiena->racas();
$hiena->habitats();
$hiena->patas();

$taturana = new animal("taturana", 6, 'folhas', "jardins");

$taturana->racas();
$taturana->habitats();
$taturana->patas();
