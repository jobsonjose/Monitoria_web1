<?php

include 'functions.php';

if (!isset($_SESSION['users'])) {
    $_SESSION['users'] = array();
}

echo"<pre>";
var_dump($_SESSION);
echo"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro e login</title>
</head>
<body>
    <h2>Cadastro de usuários</h2>
    <?php if (hasFlash('user_add')): ?>
        <h5><?= getFlash('user_add') ?></h5>
    <?php endif ?>
    <form action="add.php" method="POST">
        <input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form>
    <hr>
    <h2>Login</h2>
    <?php if (hasFlash('login_error')): ?>
        <h5><?= getFlash('login_error') ?></h5>
    <?php endif ?>
    <form action="login.php" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>
</body>
</html>
<?php

$_SESSION['flash'] = array();

?>