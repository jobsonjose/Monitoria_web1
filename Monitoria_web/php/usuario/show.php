<?php
		include '../conexao_session.php';
            if (!isset($_SESSION['Login'])) {
                    header("location: new.php");
            }
            $login = $_SESSION['Login'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Bem-Vindo <?= $_SESSION['Login'] ?></title>
 </head>
 <body>

        <center>
            <div class="col-md-8">
                     <div class="card">
                         <div class="card-head">
                             <h4>Ola <?= $login?></h4>
                            <a href="logout.php?id=<?=$login?>">Sair</a>
                             <p>Aqui é o Sistem de Listagem de Usuarios cadastrado na nossa Solução</p>
                         </div>
                         <div class="card-body">
                                        <table class="table ">
                                                <thead>
                                                        <tr>
                                    		 <td>Nome</td>
                                    		 <td>Password</td>
                                    		 <td>Button Editar</td>
                                    		 <td>Button Deletar</td>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                       <tr>
                                                            <?php
                                                                    foreach ($_SESSION['user'] as $nome => $senha):?>
                                                                        <td><?= $nome?></td>
                                                                        <td><?= $senha?></td>
                                                                        <?php if ($login == $nome or $login == "adm"):?>
                                                                        <td><a href="edit.php?id=<?=$nome?>">Edite</a></td>
                                                                        <td><a href="delete.php?id=<?= $nome?>">Delete</a></td>
                                                                        <?php endif; ?>
                                                        </tr>
                                                       <?php endforeach; ?>
                                                </tbody>
                                     	</table>
                                     	<a href="new.php" id="buttonsupre">Cadastrar</a>
                             </div>

                         </div>

            </div>
        </center>

 </body>
 </html>