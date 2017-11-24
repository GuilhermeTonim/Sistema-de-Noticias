<?php

  
  $erro_senha   = isset($_GET['erro_senha'])  ? $_GET['erro_senha'] : 0;
  $erro_cpf   = isset($_GET['erro_cpf'])  ? $_GET['erro_cpf'] : 0;



?>
<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Service Desk</title>

   
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

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
  

</head>

<body>

      <nav class ="navbar-inverse navbar-fixed-top">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
            </button>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="index.php">Voltar para Home</a></li>
            </ul>
          </div>
        </div>
      </nav>


	   <script type="text/javascript"></script>

      <script>
        
          $(document).ready( function(){

          //verificar se todos os campos foram devidamente preenchidos
          $('#btn_alterar').click(function(){

          var campo_vazio = false;

          if($('#campo_usuario').val() == ''){
            $('#campo_usuario').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#campo_usuario').css({'border-color': '#CCC'});
          }
          if($('#cpf').val() == ''){
            $('#cpf').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#cpf').css({'border-color': '#CCC'});
          }
           if($('#nova_senha').val() == ''){
            $('#nova_senha').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#nova_senha').css({'border-color': '#CCC'});
          }
           if($('#confirma_senha').val() == ''){
            $('#confirma_senha').css({'border-color': '#A94442'});
            campo_vazio = true;
          } else {
            $('#confirma_senha').css({'border-color': '#CCC'});
          }

          if(campo_vazio) return false;
        });
      });      

        $(document).ready(function(){
          $('cpf').mask('000.000.000-00');
        });
    
    </script>
</head>
<body>

    <div class="login-form">
	     <h3>Alterar Senha</h3>
	       <form method="post" action="altera.php" id="formAltera">
	         <div class="input uname">
		          <input type="text" class="form-control" id="campo_usuario" name="usuario" placeholder="Usuário" />
		        </div>
            <div class="input uname">
                <input type="text" class="form-control cpf-mask" id="cpf" name="cpf" maxlength="11" placeholder=" CPF ( sem pontos e hífen )" />
                <?php
              if($erro_cpf){
                //echo '<font style="color:#FF0000">CPF Invalido</font>';
                echo '<script>alert("CPF Invalido!");</script>';
              }
            ?>
            </div>
		        <div class="input pass">
	             <input type="password" class="form-control" id="nova_senha" name="senha_nova" placeholder=" Nova Senha" />
               <?php
              if($erro_senha){
               // echo '<font style="color:#FF0000">As senhas não são iguais</font>';
                echo '<script>alert("As senhas não são iguais!");</script>';
              }
            ?>
		        </div>
		        <div class="input pass">
                <input type="password" class="form-control" id="confirma_senha" name="confirme_senha" placeholder=" Confirme a Senha" />
                
            </div>
            
		        <div>
                <button type="buttom" class="btn btn-primary" id="btn_alterar">Alterar</button>
                <input type='reset' class="btn btn-primary" value='Limpar'></td>
            </div>
		  
	         </form>
           </div>

    <div class="footer">
      <footer class="navbar-inverse navbar">
        <font color="#FFFFFF"><br><p>Copyrigth @ 2017 - Tonim</p>
        
      </footer> 
    </div>

</body>
</html>