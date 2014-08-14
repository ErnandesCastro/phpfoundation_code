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

function pegandoRota() {
   $url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);

   $rota = \explode("/", $url['path'], 2);

   $pegandoRota = conteudo();

   if (empty($rota)) {
      require_once 'index.php';
   } elseif (isset($rota) && in_array($rota, $pegandoRota) != $pegandoRota) {
      require_once '404.php';
   } elseif ($rota == 'contato') {
      require_once 'contato.php';
   } elseif($rota == 'pesquisa'){
      require_once 'pesquisar.php';
   }
}

function conteudo() {
   $open = conexao();
   $conteudo = "SELECT nome, conteudo FROM conteudo;";
   $pegaConteudo = $open->prepare($conteudo);
   $pegaConteudo->execute();
   $arrayConteudo = $pegaConteudo->fetchAll(PDO::FETCH_ASSOC);
   return $arrayConteudo;
}

function pesquisar($palavra) {

   $conecta = conexao();
   $palavra = trim($_POST['pesquisa']);
   try {

      $busca = "SELECT conteudo FROM conteudo WHERE conteudo LIKE '%:palavra%'";
      $stmt = $conecta->prepare($busca);
      $stmt->bindValue(":palavra", $palavra);
      $stmt->execute();

      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      echo $resultado;
   } catch (PDOException $ex) {
      die("Nenhum resultado para a pesquisa: " . $palavra . ".");
   }
}
