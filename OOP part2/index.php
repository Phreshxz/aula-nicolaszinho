<?php


abstract class Automovel
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
    abstract public function tipo(): string;
    
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

class Veiculo extends Automovel {

    public function tipo(): string {
        return "veiculo";
    }
}

$carro = new Veiculo("volkswagen", 2, "fusca", 4);


$moto = new Veiculo("yamaha", 0, 'scooter', 2);



$onibus = new Veiculo("merceds", 5, 'laranjao', 12);

$onibus->acelerar();
$onibus->modelo();
$onibus->porta();

$moto->acelerar();
$moto->modelo();
$moto->porta();

$carro->acelerar();
$carro->modelo();
$carro->porta();


abstract class animal
{
    protected $raca;
    protected $patas;
    protected $alimento;
    protected $habitat;

    function __construct(string $raca, string $patas, string $alimento, string $habitat)
    {
        $this->raca = $raca;
        $this->patas = $patas;
        $this->alimento = $alimento;
        $this->habitat = $habitat;
    }
    abstract public function tipo(): string;
    function racas()
    {
        echo "{$this->raca} come {$this->alimento}<br>";
    }
    function habitats()
    {
        echo "o habitat da raca {$this->raca} é {$this->habitat} <br>";
    }
    function patas()
    {
        echo "ele tem {$this->patas} patas <br> ------------ <br>";
    }
}
class Especies extends Animal
{
    public function tipo(): string
    {
        return "Especie";
    }
}

$cachorro = new especies("caramelo", 4, "racao", "casas");

$hiena = new especies("hiena", 4, 'carnica', "savana");

$taturana = new especies("taturana", 6, 'folhas', "jardins");


$taturana->racas();
$taturana->habitats();
$taturana->patas();

$cachorro->racas();
$cachorro->habitats();
$cachorro->patas();

$hiena->racas();
$hiena->habitats();
$hiena->patas();



abstract class escritor
{
    protected string $ator;
    protected string $ano;
    protected string $nome;
    protected string $tema;

    public function __construct(string $ator, string $ano, string $nome)
    {
        $this->ator = $ator;
        $this->ano = $ano;
        $this->nome = $nome;
    }
    abstract public function tipo(): string;
    function genero()
    {
        echo "o {$this->nome} ele é foi atuado por {$this->ator} <br>";
    }
    function ano()
    {
        echo " foi lancado em {$this->ano} <br> ------------ <br>";
    }
}

class Filmes extends escritor
{
    public function tipo(): string
    {
        return "ação";
    }
}

$robert = new Filmes("Robert Pattinson", "2022", "The Batman");

$chris = new Filmes("Christian Bale", "2008", "cavaleiro das trevas");

$ben = new Filmes("Ben Affleck", "2016", 'Batman vs Superman');

$robert->genero();
$robert->ano();
$chris->genero();
$chris->ano();
$ben->genero();
$ben->ano();
