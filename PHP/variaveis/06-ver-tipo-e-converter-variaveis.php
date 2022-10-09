<?php

//ver tipo

$a = 1;
$b = "texto";

echo gettype($a); //integer
echo gettype($b); //string

echo PHP_EOL;
echo gettype(gettype($a)); //o retorno da função é uma string

if(gettype($a) == "integer")
{
    echo "O tipo da variável é um inteiro";
}

$c = 1;
$d = "1";

$cString = (string) $c;
$dInt = (int) $d;

echo gettype($cString); //string
 echo gettype($dInt); //integer

 
