<?php

ini_set("display_errors", true);
ini_set("error_reporting", E_ALL | E_NOTICE);

//Conexao com o banco de dados

function conexao() {
   try {
      $conectar = new PDO("mysql:host=127.0.0.1:3306;dbname=curso", "root", "");
      $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conectar;
   } catch (PDOException $exc) {
      die("Erro, código: " . $exc->getCode() . ": " . $exc->getMessage());
   }
}

//Rotas do menu

function rotas($param) {
   foreach ($param as $menuValor) {
      if ($menuValor == 'Contato') {
         return require_once 'contato.php';
      } elseif ($menuValor != 'Contato') {
         return conteudo();
      } else {
         return require_once "404.php";
      }
   }
}

function pegandoRota() {
   $url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

   $rota = \explode("/", $url['path'], 2);

   return $rota;
}

function conteudo() {
   $open = conexao();
   $conteudo = "SELECT nome, conteudo FROM conteudo;";
   $pegaConteudo = $open->prepare($conteudo);
   $pegaConteudo->execute();
   $arrayConteudo = $pegaConteudo->fetchAll(PDO::FETCH_ASSOC);
   return $arrayConteudo;
}

//function exibeConteudo() {
//$rotaSite = pegandoRota();
//   $conteudos = conteudo();
//}


function pesquisar($palavra) {

   $conecta = conexao();
   $palavra = trim($_POST['pesquisa']);
   try {

      $busca = "SELECT conteudo FROM conteudo WHERE conteudo LIKE '%:palavra%'";
      $stmt = $conecta->prepare();
      $stmt->bindValue("palavra", $palavra);
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo $resultado;
      
   } catch (Exception $ex) {
      die("Nenhum resultado para a pesquisa: " . $palavra . ".");
   }
   
}
