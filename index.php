<?php session_start(); ?>
<?php
$usuario = "usuario";
$senha = "senha";

if ($usuario == "usuario" and $senha == "senha") {
   $_SESSION['entrou'] = true;
} 
?>
<?php require_once 'menu.php';   ?>
<?php require_once 'footer.php'; ?>

<?php if($_SESSION['entrou'] != TRUE) {?>
<h3>Voc&ecirc; n&atilde;o tem autoriza&ccedil;&atilde;o para visualizar esta p&aacute;gina!</h3>
<?php } ?>