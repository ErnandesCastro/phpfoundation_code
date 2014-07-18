<?php
//ini_set('display_errors', '1');
//ini_set('error_reporting', E_ALL | E_NOTICE);

$url = parse_url("http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
//echo $url['path'];die;
$rota = explode("/", $url['path'], 2);

//echo $rota;die;
$rotaSite = ["home", "empresa", "produtos", "servicos", "contato"];

//print_r ($rota);

function rotas($param) {
   $rotaSite = ["home", "empresa", "produtos", "servicos", "contato", "resultado", "resultado"];
   if (in_array($param[1], $rotaSite)) {
      return require_once $param[1] . '.php';
   } elseif (isset($param[1]) == ' ') {
      return require_once 'home.php';
   } else {
      return "404.php";
   }
}

;
?>
<!doctype html>
<html lang="pt-BR">
   <head>
      <meta charset="UTF-8">
      <title>Ernandes Castro</title>
      <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.css.css">-->
      <!--<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css.css">-->
   </head>

   <body class="container">
      <div class="navbar">
         <div>
            <ul class="nav nav-pills">

               <?php foreach ($rotaSite as $valor) { ?>
                  <?php
                  echo '<li><a href=' . $valor . '>' . $valor.'</a></li>';
                  }
                  ?>
                  <?php rotas($rota); ?>

            </ul>
         </div>