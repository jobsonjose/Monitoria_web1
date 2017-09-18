<?php

include 'functions.php';

//if (!isset($_SESSION['users'])) {
 //   $_SESSION['users'] = array();
//}

//echo"<pre>";
//var_dump($_SESSION);
//echo"</pre>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cadastro e login</title>
</head>
<body>
    <h2>Cadastro de usuários</h2>

    <!-- As Functions não podem ser removidas.(Porque alguns alunos não vão entender muito o Codigo) -->
    <?php if (hasFlash('user_add')): ?>
        <h5><?= getFlash('user_add') ?></h5>
    <?php endif ?>
    <!-- end -->
 <!-- Os Formularios Podem ser Removidos, isso vai forçar os alunos a criar uma arquivo do jeito deles.
     <form action="add.php" method="POST">
       <input type="text" name="name" placeholder="Name">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit">
    </form>
    <hr> -->

    <!-- As Functions não podem ser removidas.(Porque alguns alunos não vão entender muito o Codigo) -->
    <h2>Login</h2>
    <?php if (hasFlash('login_error')): ?>
        <h5><?= getFlash('login_error') ?></h5>
    <?php endif ?>
    <!-- end -->

<!--    <form action="login.php" method="POST">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form> -->
</body>
</html>
<?php

$_SESSION['flash'] = array();

?>