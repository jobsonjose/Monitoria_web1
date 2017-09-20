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
                </div>
            </div>
        </div>
        </center>

</body>
</html>