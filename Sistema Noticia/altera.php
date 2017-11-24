<?php
   require_once('db.class.php');

   
   $usuario = $_POST['usuario'];
   $senha_nova = md5($_POST['senha_nova']);
   $confirme_senha = md5($_POST['confirme_senha']);
   $cpf = $_POST['cpf'];


	$objDb = new db();
	$link = $objDb->conecta_mysql();

	$usuario_existe = false;
	$cpf_existe = false;

	$sql = " select * from usuarios where usuario = '$usuario' ";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if(isset($dados_usuario['usuario'])){
			$usuario_existe = true;
		}
	} else {
		echo 'Erro ao tentar localizar o registro de usuário';
	}

	$sql = " select cpf from usuarios where usuario ='$usuario'";
	if($resultado_id = mysqli_query($link, $sql)) {

		$dados_usuario = mysqli_fetch_array($resultado_id);

		if($dados_usuario['cpf'] != $cpf){
			

				$retorno_get.= "erro_cpf=1&";
		header('Location: alterar_senha.php?'.$retorno_get);
			
		} 
	} else {
		echo 'Erro ao tentar localizar o registro de cpf';
	}

	if($senha_nova != $confirme_senha){
			$retorno_get.= "erro_senha=1&";
		header('Location: alterar_senha.php?'.$retorno_get);

			
		die();
	}

   
		 $sql = " update usuarios set senha ='$confirme_senha' where usuario ='$usuario' ";

	//executar a query
	if(mysqli_query($link, $sql)){
		echo '<script>alert("Senha alterada com sucesso!");</script>';
		 echo "<script>window.location = 'entrar.php'; </script>";
		
	} else {
		echo 'Erro ao alterar senha!';
	}
	   				
  ?>