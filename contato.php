<?php session_start()?>

<?php if($_SESSION['entrou']):?>

<?php require_once 'menu.php'; ?>

<form class="form-horizontal" action="resultado.php" method="post">
   <legend>Preencha o formul&aacute;rio</legend>
   <div class="control-group">
      <label class="control-label" >Nome</label>
      <div class="controls">
         <input type="text" placeholder="Digite seu nome..." name="nome">
      </div>
      <label class="control-label" for="inputIcon">E-mail</label>
      <div class="controls">
         <div class="input-prepend">
            <span class="add-on"><i class="icon-envelope"></i></span>
            <input class="span2" id="inputIcon" type="text" placeholder="Digite seu e-mail..." name="email" required>
         </div>
      </div>
      <label class="control-label">Assunto</label>
      <div class="controls">
         <input type="text" placeholder="Digite o assunto..." name="assunto">
      </div>
      <label class="control-label">Mensagem</label>
      <div class="controls">
         <textarea rows="3" placeholder="Digite o texto..." name="mensagem"></textarea>
      </div>
      <div class="form-actions"><button type="submit" name="enviar" class="btn btn-primary">Enviar</button></div>

   </div>

</form>

<?php require_once 'footer.php'; ?>

<?php else:?>
<h3>Voc&ecirc; n&atilde;o tem autoriza&ccedil;&atilde;o para visualizar esta p&aacute;gina!</h3>
<?php endif; ?>


