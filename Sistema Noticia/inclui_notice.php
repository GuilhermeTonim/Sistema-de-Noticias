<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$texto_notice = $_POST['texto_notice'];
	$id_usuario = $_SESSION['id_usuario'];
	if( $_POST['importante'] == true)  {
		$importante = 'S'; 
	}else  {
		$importante = 'N';
	}
	if($texto_notice == '' || $id_usuario == ''){
		die();
	}

	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
	$sql = " INSERT INTO notice(id_usuario, notice, importante) values($id_usuario, '$texto_notice', '$importante' ) ";

	mysqli_query($link, $sql);

?>