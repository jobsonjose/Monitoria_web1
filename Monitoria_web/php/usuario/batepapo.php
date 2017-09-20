<?php 
	include '../conexao_session.php';

	if (!isset($_SESSION['Login'])) {
			header("location: new.php");
	}
	$login = $_SESSION['Login'];

	$usuario = $_POST['nome'];
	$mensagem = $_POST['mensagem'];
	$data = $_POST['data'];

	if (!isset($_SESSION['mensagem'])) {
		$_SESSION['mensagem'] = array();
	}
	$_SESSION['mensagem'][$login][] = array(
			'usuario' => $usuario,
			'mensagem' => $mensagem,
			'data' => $data);
	header("location: home.php");
	// echo "<pre>";
	// var_dump($_SESSION['mensagem']);
	// echo "</pre>";
 ?>