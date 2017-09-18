<?php

include 'functions.php';

//$username = $_POST['username'];
//$password = $_POST['password'];

//Melhor deixar assim para melhorar o entendimento de como fazer a checagem do Login do usuario
if (isset() {
    $_SESSION['login'] = $?????;
    header('location: index2.php');
} else {
    //e deixei a function por causa do mesmo proposito do index.php
    addFlash('login_error', 'Login ou senha incorreto');
    header('location: index.php');
//}


?>