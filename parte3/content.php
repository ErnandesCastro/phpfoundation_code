<div id="content">
   <?php foreach (conteudo() as $value): ?>
      <?php if (pegandoRota()[1] == $value["url"]): ?>
         <?php if ($value["url"] == "contato"): ?>
            <?php require_once 'contato.php'; ?>
         <?php endif; ?>
         <p><?php echo $value["conteudo"]; ?></p>
      <?php endif; ?>
   <?php endforeach; ?>
</div>
