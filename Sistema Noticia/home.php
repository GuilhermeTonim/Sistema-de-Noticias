<?php
	
	session_start();

	if(!isset($_SESSION['usuario'])){
		header('Location: index.php?erro=1');
	}

	require_once('db.class.php');

	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$id_usuario = $_SESSION['id_usuario'];

	//--qtde de notice
	$sql = " SELECT COUNT(*) AS qtde_notice FROM notice WHERE id_usuario = $id_usuario ";
	$resultado_id = mysqli_query($link, $sql);
	$qtde_notice = 0;
	if($resultado_id){
		$registro = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC);
		$qtde_notice = $registro['qtde_notice'];
	} else {
		echo 'Erro ao executar a query notice';
	}

	
?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Service Desk</title>
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/fundo.css" rel="stylesheet" />
		<link href="css/rodape.css" rel="stylesheet" />
		

		<style>
    		html {
     			height: 100%;
    		}
   			 body {
      			background:#384e70;
      			padding: 0;
      			text-align: center;
      			font-family: 'open sans';
      			position: relative;
      			background-repeat: no-repeat;
      			margin: 0;
      			height: 100%;
    		}
    
		</style>
	
		<script type="text/javascript">

			$(document).ready( function(){

				//associar o evento de click ao botão
				$('#btn_notice').click( function(){
					
					if($('#texto_notice').val().length > 0){
						
						$.ajax({
							url: 'inclui_notice.php',
							method: 'post',
							data: $('#form_notice').serialize(),
							success: function(data) {
								$('#texto_notice').val('');
								atualizaNotice();
							}
						});
					}

				});

				function atualizaNotice(){
					//carregar as noticias

					$.ajax({
						url: 'get_notice.php',
						success: function(data) {
							$('#notice').html(data);
						}
					});
				}

				atualizaNotice();

			});

			$(document).ready( function(){

				
				$('#btn_importante').click( function(){
					
						$.ajax({
							url: 'importante.php',
							method: 'post',
							data: $('#filtronotice').serialize(),
							success: function(data) {
								$('#texto_notice').val('');
								atualizaNoticeImportante();
							}
						});
					

				});

				function atualizaNoticeImportante(){
					//carregar as noticia importante

					$.ajax({
						url: 'importante.php',
						success: function(data) {
							$('#filtronotice').html(data);
						}
					});
				}

				atualizaNoticeImportante();

			});

		</script>

</head>

<body>

	    <nav class ="navbar-inverse navbar-fixed-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>	          
	        </div>
	        
	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="sair.php">Sair</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>


	    <div class="container" >
	    	
	    	<div class="col-md-2" >
	    		<div class="panel panel-default" style="margin-top: 100px" >
	    			<div class="panel-body" >
	    				<h4><?= $_SESSION['usuario'] ?></h4>

	    				<hr />
	    				<div class="col-md-6" >
	    					NOTICIAS <br /> <?= $qtde_notice ?>
	    				</div>
	    			</div>
	    		</div>
	    	</div>
	    	
	    	<div class="col-md-6">
	    		<div class="panel panel-default" style="margin-top: 100px">
	    			<div class="panel-body">
	    				<form id="form_notice" class="input-group">
	    					<input type="text" style="margin-top: 25px" id="texto_notice" name="texto_notice" class="form-control" placeholder="O que está acontecendo agora?" maxlength="200" />
	    					<input type='checkbox' name='importante' id='importante'checked ><font color="#FF0000" size="4" face="Times"> Importante</font>
	    					<span class="input-group-btn">
	    						<button class="btn btn-primary" id="btn_notice" type="button">Publicar</button>
	    					</span><br>
	    					

	    				</form>
	    			</div>
	    		</div>

	    		<div id="notice" class="list-group"></div>

			</div>
			<div class="col-md-4">
				<div class="panel panel-default" style="margin-top: 100px">
					<div class="panel-body">
					<form id="form_filtronotice" class="input-group-item">
						<h4>Noticias Importante
						<span class="input-group-item-btn" style="margin-left: 15%;">
	    						<button class="btn btn-primary" id="btn_importante" type="button">Atualizar</button>
	    					</span><br></h4>
	    			</form>		
					</div>
				</div>
				<div id="filtronotice" class="list-group"></div>
			</div>
		
		</div>
	    </div>
		
		<div class="footer">
      		<footer class="navbar-inverse navbar" id="rodape">

      			<font color="#FFFFFF"><br>
      			<p>Copyrigth @ 2017 - Tonim</p>
 			 </footer> 
  		</div>
	  
	
</body>

</html>