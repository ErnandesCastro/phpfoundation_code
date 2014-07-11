<?php session_start() ?>
<?php if ($_SESSION['entrou']): ?>
   <?php require_once 'menu.php'; ?>

   <div class="btn-group"><i class="icon-envelope"></i>
      <h4>A passagem do Lorem Ipsum usada desde 1500</h4>
      <p class="lead">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
   </div>

   <?php require_once 'footer.php'; ?>
<?php else: ?>
   <h3>Voc&ecirc; n&atilde;o tem autoriza&ccedil;&atilde;o para visualizar esta p&aacute;gina!</h3>
<?php endif; ?>
