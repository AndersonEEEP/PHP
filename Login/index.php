<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color:lightgrey; 
		}
	</style>
	<title>Tela de login</title>
</head>
<body>
	<?php
	if (isset($_GET['erro'])) {
		$erro = $_GET['erro'];
		echo "<font color='red'>Usuario e/ou senha incorreto(os) </font>";
	}
		
	?>
	<center>
	<form method="POST" action="controle/teladeloginpro.php">
		<table>
			<h1>Tela de Login</h1>
			<tr>
				<td>Usuário</td>
				<td><input type="text" name="usuario" placeholder="Usuário"></td>
			</tr>
			<tr>
				<td>Senha</td>
				<td><input type="password" name="senha" placeholder="Senha"></td>
			</tr>
			<tr>
				<td colspan="2"><center><input type="submit" value="Enviar">  <input type="reset" value="Limpar"></center></td>
			</tr>
		</table>
	</form>
	</center>
</body>
</html>