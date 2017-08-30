<?php 
	session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Show</title>
 </head>
 <body>
 	<table>
 		<tr>
 			<?php 
 			foreach ($_SESSION['BD']['senha'] as $key => $value) {
 				$nome = $_SESSION['BD']['nome'][$key];
 				echo "<td>".$nome."</td>";
 				echo "<td>".$value."</td>";?>
 				<td><a href="edit.php?id=<?php echo $key;?>">edite</a></td>
 				<td><a href="delete.php?id=<?php echo $key;?>">delete</a></td>
 				<tr></tr>
 		<?php	}	?> 
 	</table>
 	<a href="new.php">Cadastrar</a>
 
 </body>
 </html>