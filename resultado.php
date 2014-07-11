<?php require_once 'menu.php'; ?>


<h3>Seu dados foram enviados com sucesso. Abaixo seguem os dados:</h3><br>

<p class="lead">
<?= 'Nome: '.$_POST['nome'].', <br>' ?>
<?= 'E-mail: '.$_POST['email'].', <br>' ?>
<?= 'Assunto: '.$_POST['assunto'].', <br>' ?>
<?= 'Mensagem: '.$_POST['mensagem'].'.' ?>
</p>

<?php require_once 'footer.php'; ?>

