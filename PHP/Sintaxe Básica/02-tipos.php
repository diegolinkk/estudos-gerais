<?php

/*  PHP tem vários tipos que são divididos em dois grupos*/

//tipos escalares (bool, int , float e string)
//tipos compostos: array, objeto, callable e iterable

//tipos especiais: resource e NULL


$um_booleano = true;
$uma_string = "teste";
$um_inteiro = 12;

//verificando tipos
echo gettype($um_booleano);
echo PHP_EOL;

//validando se é um tipo
if(is_bool($um_booleano))
{
    print "O tipo passado é um booleano";
}

echo PHP_EOL;

//convertendo um valor para booleano

$valor_convertido = (bool) 1;

var_dump($valor_convertido);