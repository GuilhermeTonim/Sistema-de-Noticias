<?php

	require_once('db.class.php');

	$sql = " SELECT * FROM notice ";

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){
		$dados_notice = array();

		while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			$dados_notice[] = $linha;
		}

		foreach($dados_notice as $notice){
			echo $notice['notice'];
			echo '<br /><br />';
		}

	} else {
		echo 'Erro na execução da consulta, favor entrar em contato com o admin do site';
	}

?>