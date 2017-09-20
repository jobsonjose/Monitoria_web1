<?php
	include '../conexao_session.php';

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	if (!isset($_SESSION['user'])) {
		$_SESSION['user'] = array();
	}


	$_SESSION['user'][$nome] = $senha;

	//echo "<pre>";
	//var_dump($_SESSION['BD']);
	//echo "</pre>";
	header("location: new.php");


 ?>