//recebe uma lista, configura o número maximo como o tamanho da lista menos 1
gera um índice aleatório entre 0 e esse número
retorna um valor aleatório dessa lista recebida

function elementoAleatorio(array $lista)
    {
        $tamanhoLista = sizeof($lista);
        $tamanhoLista-=1;
        $indiceAleatorio = rand(0,$tamanhoLista);
    
        return $lista[$indiceAleatorio];
    
    }
}
