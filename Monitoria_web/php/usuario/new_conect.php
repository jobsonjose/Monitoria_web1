<?php 
	include '../conexao_session.php';
	
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

		if(!isset($_SESSION['BD'])){
			$_SESSION['BD'] = array();
			$_SESSION['BD']['nome'] = array();
			$_SESSION['BD']['senha'] = array();		
			
		}
		
			$_SESSION['BD']['nome'][] = $nome;
			$_SESSION['BD']['senha'][] = $senha;
			echo "<pre>";
			var_dump($_SESSION['BD']);
			echo "</pre>";
			header("location: show.php");
			
		

		


 ?>