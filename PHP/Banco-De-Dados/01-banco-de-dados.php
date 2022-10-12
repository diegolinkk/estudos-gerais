<?php

//conectando ao banco dbh significa databaseHandle
$caminho = "banco.sqlite";
$dbh = new PDO("sqlite:".$caminho);


//obs - repare que utilizo formas diferentes de passar os parâmetros para exemplificar o uso.

//criando uma tabela 
$dbh->exec("create table IF NOT EXISTS Usuarios(
    id INTEGER PRIMARY KEY,
    nome TEXT,
    descricao TEXT
);");

//create
$statement = $dbh->prepare("insert into Usuarios (nome,descricao) VALUES (?,?);");
$statement->execute(["Diego","Usuário"]);

//read
 $statement2 = $dbh->prepare("select * from Usuarios where nome LIKE ? ");
 $nome = 'Diego';
 $statement2->bindParam(1,$nome);
 $statement2->execute();

 foreach($statement2 as $row)
 {
    print_r($row);
 }

//update
$queryUpdate = <<<END
UPDATE Usuarios
SET nome = :nome,
    descricao = :descricao
WHERE id =  :id;
END;


$statement3 = $dbh->prepare($queryUpdate);

$novoNome = 'Novo teetetet asfasdfasfsd';
$novaDescricao = 'tetetete asdfasdfsafd';
$id = 22;

$statement3->bindParam(':nome',$novoNome);
$statement3->bindParam(':descricao',$novaDescricao);
$statement3->bindParam(':id',$id);
$statement3->execute();

//delete
$statement4 = $dbh->prepare("delete from Usuarios where id = ?");
$idDelete = 34;
$statement4->bindParam(1,$idDelete);
$statement4->execute();