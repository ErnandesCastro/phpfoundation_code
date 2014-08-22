<?php
ini_set('display_errors', '1');
ini_set('error_reporting', E_ALL | E_NOTICE);
include 'function.php';

//$conteudos = pegandoRota();
//$rota = rotas($conteudos);

$conteudos = conteudo();
?>
<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <title></title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.css">-->
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.css">-->
      <!--<script type="text/javascript" src="js.js"></script>-->
   </head>

   <body class="container">
      <div class="navbar">
         <div>
            <ul class="nav nav-pills">

               <?php foreach ($conteudos as $valor): ?>

               <li><a title="Página <?php echo $valor['nome']; ?>" href=" <?php echo $valor['url']; ?>"><?php echo $valor['nome']; ?></a></li>

               <?php endforeach; ?>
            </ul>

            <form class="navbar-search pull-right" action="pesquisar.php?p=pesquisa" method="get">
               <input type="text" class="search-query" name='pesquisa' placeholder="Pesquisar">
            </form>

         </div>

      </div>
