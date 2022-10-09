<?php

$forma_1 = 'teste';
$forma_2 = "teste";

$forma_3 = <<<END
"teste
123
123
123";
END;

echo($forma_1);
echo($forma_2);
echo($forma_3);
