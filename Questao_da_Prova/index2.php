<?php

include 'functions.php';

if (!isset($_SESSION['login'])) {
    header('index.php');
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Lista de usuários</title>
    <style>
        table, td, th {
            border: 1px solid #999;
            border-collapse: collapse;
        }
        td, th {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h1>Lista de usuários</h1>
    <h4>Bem vindo, <?=$_SESSION['login']?></h4>
    <p><a href="logout.php">sair</a></p>
    <table>
        <tr>
            <th>Nome</th>
            <th>Username</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($_SESSION['users'] as $username => $data): ?>
            <tr>
                <td><?=$data['name']?></td>
                <td><?=$username?></td>
                <td><a href="remove.php?username=<?=$username?>">Remover</a></td>
            </tr>
        <?php endforeach ?>
        <?php if (hasFlash('user_del')): ?>
            <tr>
                <td colspan="3"><?=getFlash('user_del')?></td>
            </tr>
        <?php endif ?>
    </table>
</body>
</html>
