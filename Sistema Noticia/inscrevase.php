<?php

	$erro_usuario	= isset($_GET['erro_usuario'])	? $_GET['erro_usuario'] : 0;
	$erro_email		= isset($_GET['erro_email'])	? $_GET['erro_email']	: 0;
	$erro_cpf		= isset($_GET['erro_cpf'])	? $_GET['erro_cpf']	: 0;

?>

<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Sistema de Noticias</title>
		
		
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css" type="text/css" />
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet" />
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
	            <li><a href="index.php">Voltar para Home</a></li>
	          </ul>
	        </div>
	      </div>
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

	    	
	    	<div class="login-form" align="middle">
	    		<h3>Inscreva-se</h3>
	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
						<?php
							if($erro_usuario){ // 1/true 0/false
								echo '<font style="color:#FF0000">Usuário já existe</font>';
							}
						?>
					</div>

					<div class="form-group">
						<input type="text" class="form-control cpf-mask" id="cpf" name="cpf" maxlength="11" placeholder="CPF ( sem pontos e hífen )" required="requiored">
						<?php
							if($erro_cpf){
								echo '<font style="color:#FF0000">CPF já existe</font>';
							}
						?>
					</div>

					<div class="form-group">
						<input type="text" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
						<?php
							if($erro_email){
								echo '<font style="color:#FF0000">E-mail já existe</font>';
							}
						?>
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					
					<button type="submit" class="btn btn-primary form-control">Cadastre-se</button>
				</form>
			</div>
			<div class="col-md-4"></div>

			<div class="clearfix"></div>
			<br />
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>
			<div class="col-md-4"></div>

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