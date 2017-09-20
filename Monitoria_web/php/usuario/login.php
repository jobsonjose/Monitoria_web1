<?php
    include '../conexao_session.php';

    $nome = $_POST['nome'];
    $senha = $_POST['senha'];

    if (isset($_SESSION['user'][$nome]) && $_SESSION['user'][$nome] == $senha) {
            $_SESSION['Login'] = $nome;
            header("location: show.php");
    }else{
        header("location: new.php");
    }
 ?>