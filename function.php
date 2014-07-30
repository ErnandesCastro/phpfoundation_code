<?php

ini_set("display_errors", true);
ini_set("error_reporting", E_ALL | E_NOTICE);

//Conexao com o banco de dados

function conexao() {
   try {
      $conectar = new PDO("mysql:host=127.0.0.1;dbname=curso", "root", "159753");
      $conectar->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $conectar;
   } catch (PDOException $exc) {
      die("Erro, código: " . $exc->getCode() . ": " . $exc->getMessage());
   }
}

//Rotas do menu

function rotas($param) {
   $rotaSite = ["home", "empresa", "produtos", "servicos", "contato", "resultado"];
   if (in_array($param[1], $rotaSite)) {
      return require_once $param[1] . '.php';
   } elseif (isset($param[1]) == ' ') {
      return require_once 'home.php';
   } else {
      return "404.php";
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

function exibeConteudo() {
   $rotaSite = pegandoRota();
   $conteudos = conteudo();
}
