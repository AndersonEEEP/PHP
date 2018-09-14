<!DOCTYPE html>
<html>
<head>
	<style>
		body{
			background-color: lightgrey;
		}
	</style>
	<title>Sistema</title>
</head>
<body> <center>
	<?php
		session_start();
		if ($_SESSION['login'] == null) {
			header("Location:../index.php");
		}else{
	echo  $_SESSION['login']. ", seja bem vindo";
		}

	?> 
	<br>
	<a href="../sair.php">Sair</a>
</body>
</html>