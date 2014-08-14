<?php
//ini_set('display_errors', '1');
//ini_set('error_reporting', E_ALL | E_NOTICE);
include 'function.php';

//$conteudos = pegandoRota();
//$rota = rotas($conteudos);

$conteudos = conteudo();
?>
<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <title>Ernandes Castro</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.css">-->
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.css">-->
      <script type="text/javascript" src="js.js"></script>
   </head>

   <body class="container">
      <div class="navbar">
         <div>
            <ul class="nav nav-pills">

               <?php
//               if ($rota == 'contato') {
//                  require_once 'contato.php';
//               } else {


               foreach ($conteudos as $valor) {
//                  if ($valor == 'Contato') {
//                     echo "<li><a onClick=\"exibeConteudo('" . $valor['conteudo'] . "')\">" . $valor['nome'] . "</a></li>";
//                     require_once 'contato.php';
//                  } else {
                  //echo "<li><a onClick=\"exibeConteudo('" . $valor['conteudo'] . "')\">" . $valor['nome'] . "</a></li>";
                  echo "<li><a " . $valor['nome'] . " > " . $valor['nome'] . "</a></li>";
//                  }
               }
//               }
               ?>
            </ul>

            <form class="navbar-search pull-right" name='' action="pesquisar">
               <input type="text" class="search-query" placeholder="Pesquisar">
            </form>

         </div>

      </div>
