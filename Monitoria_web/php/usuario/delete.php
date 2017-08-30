<?php 
	include '../conexao_session.php';
	if(!isset($_SESSION['BD'])){
		header('location: new.php');
	}

	$id = $_GET['id'];

	unset($_SESSION['BD']['nome'][$id]);
	unset($_SESSION['BD']['senha'][$id]);
	header("location: show.php");
 ?>