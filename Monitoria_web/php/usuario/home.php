<?php 
	include '../conexao_session.php';
		
		if (!isset($_SESSION['Login'])) {
			header("location: new.php");
		}
		
		$login = $_SESSION['Login'];
		if (!isset($_SESSION['mensagem'])) {
			$_SESSION['mensagem'] = array();	
		}
	
 ?>
 	<center>
		<div class="col-md-8">
		 <div class="card">
		 	<div class="card-head">
		 		<h4>Bem-vindo <?= $login?></h5>
		 		<a href="logout.php?id=<?=$login?>">Sair</a>
		 	</div>
		 	<div class="card-body">
		 		<h5>Sistema de Bate-papo</h5>
		 		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, quibusdam. Architecto asperiores aliquam iure eum quo! Similique quod molestias alias necessitatibus, eligendi iusto. Vero odio quisquam iure dicta, ipsam totam?</p>
		 		<hr>
		 		<h6>Quer conversar com Alguem ?</h6>
		 		<form action="batepapo.php" method="POST">
		 			<div class="form-group">
		 				<select class="form-control form-control-md" name="nome">
		 					<?php foreach ($_SESSION['user'] as $nome => $value):?>
		 					<option name="nome"><?=$nome?></option>
		 				<?php endforeach; ?>
		 				</select>
		 			</div>
		 			<div class="form-group">
		 				<input type="text" name="mensagem" placeholder="Envie sua Mensagem" aria-describedby="MensagemHelp" class="form-control">
		 				<small id="MensagemHelp" class="form-text text-muted">Mande a Mensagem Para algum usuario</small>
		 			</div>
		 			<div class="form-group">
		 				<input type="date" name="data" class="form-control">
		 			</div>
		 			<input type="submit" class="form-control" value="Enviar Mensagem">
		 		</form>
		 	</div>
		 </div>
			
		</div>
 		
 	</center>
 	<center>
 		<div class="col-md-8">
 			<div class="card">
 				<div class="card-head">
 					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi neque vel nemo, doloremque. Ducimus veniam reiciendis, repudiandae quidem. Dolorem quidem totam harum, tempora repellendus iusto incidunt unde, aliquam assumenda. Reprehenderit.</p>
 				</div>
 				<div class="card-body">
 					<table class="table-inverse">
 					<tr>
 						<th>Para</th>
 						<th>Mensagem</th>
 						<th>Data</th>
 					</tr>
 					<tr>
						<?php for ($i=0; $i < count($_SESSION['mensagem'][$login]); $i++):?>			
							<?php 
							$nome_usuario = $_SESSION['mensagem'][$login][$i]['usuario'];
							$mensagem_usuario = $_SESSION['mensagem'][$login][$i]['mensagem'];
							$data_usuario = $_SESSION['mensagem'][$login][$i]['data'];
							 ?>
							 <td><?= $nome_usuario?></td>
							 <td><?= $mensagem_usuario?></td>
							 <td><?= $data_usuario?></td>
					</tr>
					<?php endfor; ?>
 					</table>
 				</div>
 			</div>
 		</div>
 	</center>			