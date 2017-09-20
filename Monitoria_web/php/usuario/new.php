<?php
	include '../conexao_session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>New user</title>
</head>
<body>
        <center>
        <div class="col-md-8">
            <div class="card">
                <div class="card-head">
          	           <h4>Cadastro</h4>
                </div>
                <div class="card-body">
                    <form action="new_conect.php" method="POST" >
                        <div class="form-group">
                    	<input type="text" class="form-control" name="nome" aria-describedby="NomeHelp" placeholder="Digite seu Nome ex:Joao Jose">
                                <small id="NomeHelp" class="form-text text-muted">Nome para ser identificado no Sistema</small>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="senha" placeholder="Digite sua Senha ex: Joao123">
                        </div>
                            <input type="submit" name="enviar" value="Cadastrar">
        	   </form>
                        <?php if(isset($_SESSION['Login'])): ?>
                            <a href="show.php">Listagem</a>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        </center>
        <hr>
        <?php if(!isset($_SESSION['Login'])):?>
        <center>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-head">
                        <h4>Login</h4>
                    </div>
                    <div class="card-body">
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" type="text" name="nome" aria-describedby="LoginHelp" placeholder="Digite Seu Nome">
                                <small id="LoginHelp" class="form-text text-muted">Se nao Possui Uma conta no Sistema,Por favor se cadastre</small>
                            </div>
                            <div class="form-group">
                                <input type="password" name="senha" class="form-control" placeholder="Digite sua senha">
                            </div>
                                <input type="submit" name="Enviar" value="Conectar">
                        </form>
                    </div>
                </div>
            </div>
        </center>
    <?php endif; ?>
</body>
</html>