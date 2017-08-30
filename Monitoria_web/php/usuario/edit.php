<?php 
	include '../conexao_session.php';

	$id = $_GET['id'];
	$_SESSION['edit'] = $id;
?>
<form action="new_conect.php" method="POST">
	<input type="text" name="nome" value="<?=$_SESSION['BD']['nome'][$id]?>">
	<input type="password" name="senha" value="<?=$_SESSION['BD']['senha'][$id]?>" requird=>
	<input type="submit" name="Enviar" value="Editar">
</form>