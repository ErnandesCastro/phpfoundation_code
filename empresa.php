<?php session_start()?>

<?php if($_SESSION['entrou']):?>

<?php require_once 'menu.php'; ?>

<div id="conteudo">
   <h4>Secção 1.10.32 do "de Finibus Bonorum et Malorum", escrito por Cícero em 45 AC.</h4>
   <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
</div>

<?php require_once 'footer.php'; ?>
<?php else:?>
<h3>Voc&ecirc; n&atilde;o tem autoriza&ccedil;&atilde;o para visualizar esta p&aacute;gina!</h3>
<?php endif; ?>

