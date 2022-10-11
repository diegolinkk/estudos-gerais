<?php

//aqui coloquei o a para append mas se quiser posso colocar w de write
$meuArquivo = fopen("novo-arquivo.txt",'a');

$texto = "Estou escrevendo isso diretamente do PHP" . PHP_EOL;
fwrite($meuArquivo, $texto);

$texto = "Agora estou escrevendo mais diretamente do PHP";
fwrite($meuArquivo,$texto);

fclose($meuArquivo);