<?php

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
	

?>


<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Sistema Notice</title>

		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<<link href="css/fundo.css" rel="stylesheet" />
		<link href="css/footer.css" rel="stylesheet" />
		<link href="css/style.css" rel="stylesheet" />

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

		<script type="text/javascript"></script>

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

<div class="main">
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
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>


  	

	<div class="login-form">
		<div class="login-face"><img src="imagens/face.png"></div>
				<h3>Login</h3>
			<section class="form">
				<form method="post" action="validar_acesso.php" id="formLogin">
				<div class="input uname">
					<input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
					<i class="fa fa-user"></i>
				</div>
				<div class="input pass">
					<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Senha" />
					<i class="fa fa-lock"></i>
				</div>
					<a href="alterar_senha.php" style="float:right;color:gray;font-size:14px;text-decoration:none;
						font-family:san-serif,Arial;margin-bottom:10px;">Esqueceu a senha?</a>
					<p class="error-msg">Usuário ou Senha incorreto</p>
				<div>
					<button type="buttom" class="btn btn-primary" id="btn_login">Entrar</button>
				</div>

					<?php
								if($erro == 1){
									//echo '<font color="#FF0000">Usuário e ou senha inválido(s)</font>';
									echo '<script>alert("Usuário e ou senha inválido(s)");</script>';
								}
					?>
			
				</form>
		
		
			</section>
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