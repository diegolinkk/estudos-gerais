<?php

$a = 1;
$b = 2;

echo $a + $b . PHP_EOL; //3
echo $a - $b . PHP_EOL;//-1
echo $a * $b . PHP_EOL;//2
echo $a / $b . PHP_EOL; //0,5
echo $a % $b . PHP_EOL; //1
echo $a ** $b . PHP_EOL; //1

$c = -1;

echo +$c . PHP_EOL; //identidade, mantém 1
echo -$c; //negação 1