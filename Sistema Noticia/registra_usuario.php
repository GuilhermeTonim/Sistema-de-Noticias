<?php

	require_once('db.class.php');

	$usuario = $_POST['usuario'];
	$email = $_POST['email'];
	$senha = md5($_POST['senha']);
	$cpf = $_POST['cpf'];

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$usuario_existe = false;
	$email_existe = false;
	$cpf_existe = false;

	//verificar se o usuário já
	$sql = " select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	//verificar se o e-mail já existe
	$sql = " select * from usuarios where email = '$email' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['email'])){
			$email_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de email';
	}

	//verificar se o cpf já existe
	$sql = " select * from usuarios where cpf = '$cpf' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['cpf'])){
			$cpf_existe = true;
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de cpf';
	}


	if($usuario_existe || $email_existe || $cpf_existe){

		$retorno_get = '';

		if($usuario_existe){
			$retorno_get.= "erro_usuario=1&";
		}

		if($email_existe){
			$retorno_get.= "erro_email=1&";
		}

		if($cpf_existe){
			$retorno_get.= "erro_cpf=1&";
		}

		header('Location: inscrevase.php?'.$retorno_get);
		die();
	}

	$sql = " insert into usuarios(usuario, email, senha, cpf) values ('$usuario', '$email', '$senha', '$cpf') ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo '<script>alert("Usuário registrado com sucesso!");</script>';
		 echo "<script>window.location = 'entrar.php'; </script>";
	} else {
		echo 'Erro ao registrar o usuário!';
	}


?>