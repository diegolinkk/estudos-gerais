  <?php


//função simples
function hello()
{
    echo "Hello";
}

//função com argumento
function helloName($name)
{
    echo "Hello, sir {$name}";
}

//retornando um valor
function sum($a, $b)
{
    return $a + $b;
}

//usando as funções
hello();
helloName("Diego");

echo sum(10,15);