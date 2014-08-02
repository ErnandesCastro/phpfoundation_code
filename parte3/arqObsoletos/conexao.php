<?php

ini_set("display_errors", true);
ini_set("error_reporting", E_ALL | E_NOTICE);



//$stmt = $executar5->fetch(PDO::FETCH_ASSOC);

//print_r($stmt);
//
//
//
//Testes das aulas
//$consultar = "SELECT * FROM pessoa";
//$stmt = $conectar->prepare($consultar);
//$stmt->execute();
//$pessoas = $stmt->fetchAll(PDO::FETCH_ASSOC); //pegando todos os registros com o fecthAll
//
//foreach ($pessoas as $pessoa){
//   echo $pessoa['nome']." - ".$pessoa['cpf']."<br>";
//}
//
//CONEXAO FUNCIONANDO
//
//$conecta = conexao();
//$id = 1;
//$consultar = "SELECT * FROM conteudo WHERE id = :id";
//$stmt = $conecta->prepare($consultar);
//$stmt->bindValue("id", $id); //substitui o :id da query, tornando seguro contra sql injection
//$stmt->execute();
//
//$pessoas = $stmt->fetch(PDO::FETCH_ASSOC); //pegando apenas um registro com o fecth
//
//print_r($pessoas);

//foreach ($pessoas as $pessoa){
//   echo $pessoa['nome']." - ".$pessoa['cpf']."<br>";
//}
