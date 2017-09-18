<?php

include 'functions.php';

$username = $_GET['username'];
unset($_SESSION['users'][$username]);

addFlash('user_del', 'Usuário removido com sucesso');

header('location: index2.php');

?>