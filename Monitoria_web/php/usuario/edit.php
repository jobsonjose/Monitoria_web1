<?php
	include '../conexao_session.php';

	$id = $_GET['id'];
?>
<center>
    <div class="col-md-8">
        <div class="card">
            <div class="card-head">
                    <h4>Edite</h4>
            </div>
            <div class="card-body">
                <form action="new_conect.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="nome" value="<?= $id ?>" aria-describedby="EditeNome" placeholder="Edite Seu Nome">
                        <small id="EditeNome" class="form-text text-muted">Edite o seu nome Já que digitou errado</small>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="senha" value="<?= $_SESSION['user'][$id] ?>" placeholder="Digite uma nova Senha">
                    </div>
                        <input type="submit" name="Enviar" value="Editar">
                </form>
            </div>
        </div>
    </div>
</center>
<?php
        unset($_SESSION['user'][$id]);
        unset($_SESSION['Login']);
 ?>