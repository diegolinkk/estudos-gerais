<?php

$senha = '12345';
$hashGerada = password_hash("12345",PASSWORD_ARGON2I);
echo "Hash gerada por um algorítmo Argony: " . $hashGerada;
echo PHP_EOL;


if(password_verify($senha,$hashGerada)){
    echo "password correta";
};


echo PHP_EOL;

$validaSenha = password_verify('123456',$hashGerada);

if($validaSenha){
    echo "password correta";
}else{
    echo "password incorreta";
}