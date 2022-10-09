<?php 
$array1 = array(1,2,3,4,5);
$array1[] = 6; //adicionando um valor
$array1[0] = "novo valor"; //alterando um valor
unset($array1[1]); //removendo o valor do índice especificado
// unset($array1); //remove o array completo

var_dump($array1);


echo PHP_EOL;
// array associativo 

echo("{$array1[1]}");

$array2 = [
    'chave1' => 'valor da chave 1',
    "chave2" => "valor da chave 2",
];

var_dump($array2);

echo($array2['chave2']);

//desestructuração de array

$nomes = ["Diego","Aline","João"];
[$diego,$aline,$joao] = $nomes;

echo $diego; // > "Diego"

//pulando valores
[,$aline2] = $nomes;
[,,$joao2] = $nomes;

echo $aline2;
echo $joao2;

//percorrendo arrays
$arrayteste1 = [1,2,3,4];
foreach($arrayteste1 as $valores)
{
    echo $valores;
}

$arrayteste2 = ['nome1' => "Diego",'conjuge' => "Aline"];

foreach($arrayteste2 as $chave => $valor)
{
    echo "Campo: {$chave} Valor: {$valor}";
}

