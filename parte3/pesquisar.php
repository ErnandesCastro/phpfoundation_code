<?php include 'function.php'; ?>
<div>

      <div class="alert alert-success">
         <?php $pesq = pesquisar($_GET['pesquisa']); ?> 
         <?php foreach ($pesq as $resul): ?> 
            <?php echo $resul['conteudo']; ?>
         <?php endforeach; ?>
      </div>

</div>