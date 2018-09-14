<?php

	$usuario = $_POST['usuario'];
	$senha = $_POST ['senha'];

	$superuser = "admin";
	$password = "admin";



	if ($usuario == $superuser and $senha == $password) {
	 	header('location:../alunos/index.php');
 		session_start();
		$_SESSION['login'] = $usuario;
		$_SESSION['senha'] = $senha;
	 } else {
	 	header('location:../index.php?erro=1');
	 }

?>