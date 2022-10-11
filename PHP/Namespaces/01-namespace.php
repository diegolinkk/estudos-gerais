<?php

namespace namespace1;
require_once "./02-namespace2.php";

//aqui eu importei o namespace e dei um nome alternativo
use namespace2\Cachorro  as cachorroNamespace2;


//repare que no namespace anterior também tem uma classe Cachorro mas elas não conflitam pq estão em namespaces diferentes
class Cachorro
{
    public function latir()
    {
        echo "auau";
    }
}

$c1 = new Cachorro();
$c1->latir();

echo PHP_EOL;

$c2 = new cachorroNamespace2();
$c2->latir();

