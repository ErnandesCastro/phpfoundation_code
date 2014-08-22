<?php
include_once 'function.php';

$conexao = conexao();

$query = "CREATE DATABASE IF NOT EXISTS curso CHARACTER SET utf8 COLLATE utf8_bin;";
$executar = $conexao->prepare($query);
$executar->execute();

$query = "DROP TABLE IF EXISTS conteudo;";
$executar = $conexao->prepare($query);
$executar->execute();

$query2 = "DROP TABLE IF EXISTS contato;";
$executar2 = $conexao->prepare($query2);
$executar2->execute();

$query3 = "CREATE TABLE IF NOT EXISTS conteudo("
        . "id int NOT NULL AUTO_INCREMENT PRIMARY KEY,"
        . "nome varchar(40),"
        . "url varchar(13),"
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

$query5 = "INSERT INTO conteudo (id,nome,conteudo,url) VALUES"
        . "(1,'Home','Seja bem-vindo a Página Inicial!','home'),"
        . "(2,'Produtos','<h4>Secção 1.10.33 do de Finibus Bonorum et Malorum, escrito por Cícero em 45 AC.</h4><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>','produtos'),"
        . "(3,'Serviços','<h4>A passagem do Lorem Ipsum usada desde 1500</h4><p class=".'lead'.">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>','servicos'),"
        . "(4,'Empresa','<h4>Secção 1.10.32 do de Finibus Bonorum et Malorum, escrito por Cícero em 45 AC.</h4><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>','empresa'),"
        . "(5,'Contato','','contato');";
$executar5 = $conexao->prepare($query5);
$executar5->execute();

$query5 = "INSERT INTO contato VALUES"
        . "(1,'user1','user1@email.com','assunto1','msg1'),"
        . "(2,'user2','user2@email.com','assunto2','msg2'),"
        . "(3,'user3','user3@email.com','assunto3','msg3');";
$executar5 = $conexao->prepare($query5);
$executar5->execute();
