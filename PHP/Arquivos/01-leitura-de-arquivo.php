<?php

//lê arquivo
$arquivo = fopen("nomes.txt","r");

//aqui ele lê o arquivo até o tamanho x, nesse caso o tamanho do próprio arquivo
$leitura =  fread($arquivo,filesize("nomes.txt"));

//tamanho do arquivo
echo filesize("nomes.txt");

//transformando a string em uma lista de nomes
$nomes = explode(",",$leitura);

print_r($nomes);

//fechando arquivo
fclose($arquivo);