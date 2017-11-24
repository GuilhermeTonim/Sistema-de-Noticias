<?php

	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	
	$objDb = new db();
	$link = $objDb->conecta_mysql();
	
		$sql = " SELECT DATE_FORMAT(n.data_inclusao, '%d %b %Y %T') AS data_inclusao_formatada, n.notice, u.usuario ";
		$sql.= " FROM notice AS n JOIN usuarios AS u ON (n.id_usuario = u.id) and n.importante = 'S' ";
		$sql.= " ORDER BY data_inclusao DESC ";

	$resultado_id = mysqli_query($link, $sql);

	if($resultado_id){

		while($registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){
			echo '<a href="#" class="list-group-item">';
				echo '<h4 class="list-group-item-heading">'.$registro['usuario'].' <small> - '.$registro['data_inclusao_formatada'].'</small></h4>';
				echo '<p class="list-group-item-text">'.$registro['notice'].'</p>';
			echo '</a>';
		}

	} else {
		echo 'Erro na consulta de Noticia Importante no banco de dados!';
	}


?>