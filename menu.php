<?php
//ini_set('display_errors', '1');
//ini_set('error_reporting', E_ALL | E_NOTICE);
include 'function.php';

//$url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
////echo $url['path'];die;
//$rota = explode("/", $url['path'], 2);
//
////echo $rota;die;
//$rotaSite = ["home", "empresa", "produtos", "servicos", "contato"];
//print_r ($rota);

$rotaSite = pegandoRota();
$conteudos = conteudo();

print_r($rotaSite);
?>
<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <title>Ernandes Castro</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.css">-->
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.css">-->
      <script type="text/javascript">
         exibeConteudo(conteudo){
            alert(conteudo);
         }
      </script>
   </head>

   <body class="container">
      <div class="navbar">
         <div>
            <ul class="nav nav-pills">

               <?php
               foreach ($conteudos as $valor) {
                  echo "<li><span onClick='exibeConteudo(" . $valor['conteudo'] . ")" . "'>" . $valor['nome'] . "</span></li>";
               }
               ?>
            </ul>
         </div>
         <?php
         //while ($conarray_walk($conteudos, exibeConteudo())) {
//            $valor2 = $conteudos;
//            echo $valor2['nome'];
//            if($rotaSite == $conteudos['nome']) {
//               echo "<p>" . $conteudos['conteudo'] . "</p>";
//            }
         // echo exibeConteudo();
         //}
         echo exibeConteudo();
         ?>
      </div>
