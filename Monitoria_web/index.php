<?php 
	include 'php/conexao_session';
	if(!isset($_SESSION['Usuario'])){
		header('location: php/usuario/new.php');
	}else{
		header('location: php/usuario/show.php');
	}

?>

 