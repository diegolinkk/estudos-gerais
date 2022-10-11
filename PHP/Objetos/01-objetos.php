<?php

//declarar objeto
class Carro
{
    //atributos e métodos públicos e privados
    private int $potencia;
    private string $marca;
    public string $modelo;

    public function setMarcaModelo($marca,$modelo)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function andar()
    {
        echo "Carro da marca {$this->marca} e modelo {$this->modelo} está andando";
    }

    public function setPotencia(int $valor)
    {
        $this->potencia = $valor;
    }

}

//instanciar objeto

$c1 = new Carro();

//usando funcao
$c1->setMarcaModelo("Chevrolet","Onix");
$c1->andar();

//acessando método público
$c1->modelo = "Spin";
echo $c1->modelo;

//declarar classe com parâmetro de inicialização

class Cachorro
{
    private $nome;
    public function __construct($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

}

//usar essa classe

$cachorro = new Cachorro("Zaira");
echo $cachorro->getNome();

//interface
interface Animal
{
    public function __construct($nome);
    public function andar();
}

class Gato implements Animal
{
    Private string $name;

    public function __construct($nome)
    {
        $this->name = $nome;
    }

    public function andar()
    {
        echo "O animal de nome: {$this->name} está andando";
    }
}

$g1 = new Gato("zezé");
$g1->andar();


