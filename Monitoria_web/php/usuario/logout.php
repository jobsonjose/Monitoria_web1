<?php
    include '../conexao_session.php';

    $id = $_GET['id'];

    unset($_SESSION['Login']);
    header("location: new.php");

 ?>