<?php

$inteiro = 1234;    
$octal = 0o123;
$hexadecimal = 0x1A;
$binario = 0b11111111;
$inteiro_2 = 123_456_789;

echo ($octal);
echo ($hexadecimal);
echo($binario);
echo ($inteiro_2);

//tratando divisões
//divisão de dois inteiros podem retornar um float

var_dump(25 / 7);
echo PHP_EOL;
var_dump((int) (25/7)); //forçando a saida pra 3
var_dump(round(25/7)); //arredondando o valor pra cima, que da 4

