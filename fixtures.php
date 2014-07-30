<?php
include_once 'function.php';

$conexao = conexao();

$query = "DROP TABLE IF EXISTS conteudo";
$executar = $conexao->prepare($query);
$executar->execute();

$query2 = "DROP TABLE IF EXISTS contato";
$executar2 = $conexao->prepare($query2);
$executar2->execute();

$query3 = "CREATE TABLE IF NOT EXISTS conteudo("
        . "id int NOT NULL AUTO_INCREMENT PRIMARY KEY,"
        . "nome varchar(20),"
        . "conteudo text);";
$executar3 = $conexao->prepare($query3);
$executar3->execute();

$query4 = "CREATE TABLE IF NOT EXISTS contato("
        . "id int NOT NULL AUTO_INCREMENT PRIMARY KEY,"
        . "nome varchar(50),"
        . "email varchar(50),"
        . "assunto varchar(100),"
        . "mensagem text);";
$executar4 = $conexao->prepare($query4);
$executar4->execute();

$query5 = "INSERT INTO conteudo (id,nome,conteudo) VALUES"
        . "(1,'home','Home'),"
        . "(2,'produtos','Produtos'),"
        . "(3,'servicos','Servicos'),"
        . "(4,'empresa','Empresa');";
$executar5 = $conexao->prepare($query5);
$executar5->execute();

$query5 = "INSERT INTO contato VALUES"
        . "(1,'user1','user1@email.com','assunto1','msg1'),"
        . "(2,'user2','user2@email.com','assunto2','msg2'),"
        . "(3,'user3','user3@email.com','assunto3','msg3');";
$executar5 = $conexao->prepare($query5);
$executar5->execute();
