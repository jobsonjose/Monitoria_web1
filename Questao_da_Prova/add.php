<?php

include 'functions.php';

//$name = $_POST['name'];
//$username = $_POST['username'];
//$password = $_POST['password'];

//$_SESSION['users'][$username] = ['pw' => $password, 'name' => $name];

addFlash('user_add', 'Usuário adicionado com sucesso');
header('location: index.php');

?>