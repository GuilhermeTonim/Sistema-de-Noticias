<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

/**
* Sise
 * @author Guilherme Leal Tonim <guilherme.tonim@callink.com.br | tonin17@icloud.com>
 * @copyright 2017 - Tonim
  */

?> 


<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		
	
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Sistema de Noticias</title>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet" />
		<link href="css/fundo.css" rel="stylesheet" />
		<link href="css/footer.css" rel="stylesheet" />


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
	
		<script>
			$(document).ready( function(){

				//verificar se os campos de usuário e senha foram devidamente preenchidos
				$('#btn_login').click(function(){

					var campo_vazio = false;

					if($('#campo_usuario').val() == ''){
						$('#campo_usuario').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_usuario').css({'border-color': '#CCC'});
					}

					if($('#campo_senha').val() == ''){
						$('#campo_senha').css({'border-color': '#A94442'});
						campo_vazio = true;
					} else {
						$('#campo_senha').css({'border-color': '#CCC'});
					}

					if(campo_vazio) return false;
				});
			});					
		</script>
	</head>

	<body>

	    <div class ="navbar-inverse navbar-fixed-top">
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
	            <li><a href="inscrevase.php">Inscrever-se</a></li>
	            <li><a href="entrar.php">Entrar</a></li>
	            </li>
	          </ul>
	        </div>
	        </div>
	    </div>

	    
	    <div class="container" >

	     
	      <div class="container">
	      <div class="jumbotron" style="margin-top: 100px">

	        <h1>Sistema de Noticias </h1>
	        <br>
	        <img src="#"></h1>
	        <br>
	        <br>
	        <br>
	        <p font: 16px/1 "Helvetica Neue", Helvetica, Arial, sans-serif;>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>

	</div>
	
		<div class="footer">
			<footer class="navbar-inverse navbar">
  		<font color="#FFFFFF"><br>
  		<p>Copyrigth @ 2017 - Tonim</p>
	</footer> 
	</div>
	

	</body>
	
</html>
