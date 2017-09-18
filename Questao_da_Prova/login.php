<?php

include 'functions.php';

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($_SESSION['users'][$username]) && $_SESSION['users'][$username]['pw'] == $password) {
    $_SESSION['login'] = $username;
    header('location: index2.php');
} else {
    addFlash('login_error', 'Login ou senha incorreto');
    header('location: index.php');
}


?>