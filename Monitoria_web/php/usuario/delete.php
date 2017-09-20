<?php
	include '../conexao_session.php';


	$id = $_GET['id'];

	unset($_SESSION['user'][$id]);

	header("location: show.php");
 ?>