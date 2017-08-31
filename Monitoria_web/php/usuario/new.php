<?php 
	include '../conexao_session.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>New user</title>
</head>
<body>
	<h4>Cadastro</h4>
	<form action="new_conect.php" method="POST" class="formulario">
		<input type="text" name="nome" placeholder="Digite seu Nome ex:Joao Jose">
		<input type="password" name="senha" placeholder="Digite sua Senha ex: Joao123">
		<input type="submit" name="enviar" value="Cadastrar">
	</form>
	
</body>
</html>