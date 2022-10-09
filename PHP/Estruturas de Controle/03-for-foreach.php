<?php

for($i = 0; $i < 10; $i++){

    if($i == 3){
        continue; //vai para próximo loop
    }

    
    if($i == 7){
        break; //para execução do loop completo
    }
    
    echo $i;

}

echo PHP_EOL;

//rodando números pares
for($i = 2; $i <=10; $i+=2){
    echo $i;
}

echo PHP_EOL;

//foreach
$array = [1,2,3,4,5,6,7,8];

foreach($array as $arr){
    echo $arr;
}

echo PHP_EOL;


//posso incluir um iterador de chave 
foreach($array as $key => $value){
    $key +=1; //essa soma é só pra igualar chave/valor, ela se incrementa sozinha a cada loop
    echo "{$key} => {$value}" . PHP_EOL;
}