<?php session_start() ?>
<?php if ($_SESSION['entrou']): ?>
   <?php require_once 'menu.php'; ?>

   <div id="conteudo">
      <h4>Secção 1.10.33 do "de Finibus Bonorum et Malorum", escrito por Cícero em 45 AC.</h4>
      <p>"At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat."</p>
   </div>

   <?php require_once 'footer.php'; ?>
<?php else: ?>
   <h3>Voc&ecirc; n&atilde;o tem autoriza&ccedil;&atilde;o para visualizar esta p&aacute;gina!</h3>
<?php endif; ?>

