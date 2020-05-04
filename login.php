<?php
//session_start();
include_once 'face.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login</title>
		<link href="css/bootstrap.css" rel="stylesheet">
		<link href="css/signin.css" rel="stylesheet">
    
	<meta http-equiv="refresh" content="59">
	

   <!-- boostrap -->
  <link href="public/css/bootstrap.min.css" rel="stylesheet">
  


    <link rel="stylesheet" type="text/css" href="style.css">
	
  
 </head>
  
  
  
  <body style="background-image: url(public/img/login.jpg); background-size: cover; background-repeat: no-repeat;">

  		<main class="container" style=" height:600px;">


        <?php

        include ('header.php');

        ?>



  	
	


	<div  class="form col-sm-10 col-lg-4">
			<div >
				<h2 class="text-center">ÁREA RESTRITA</h2>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form name="form" class="form-group" method="POST" action="valida.php">
					<!--<label>Usuário</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<!--<label>Senha</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>
					
					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-primary btn-lg btn-block">
					
					<div class="row justify-content-center" style="margin-top: 20px"> 
						<h5>Você ainda não possui uma conta?</h5>
						<a href="cadastrar.php"><h5>Crie grátis</h5></a>
					</div>
					<div class="row justify-content-center" style="margin-top: 20px"> 
						<a href="<?php echo $loginUrl; ?>">
							<button type="button" class="btn btn-primary btn-lg btn-block">Facebook</button>
						</a>
					</div>
					
					
					
				</form>
			</div>
		</div>			




	
  <div class="texto col-sm-12 col-lg-8" style="margin-top: 100px;">  
  <h1>Cadastre-se ou faça login</h1>
  <h2>Veja como é simples comprar moeda estrangeira em espécie, carregar seu cartão pré-pago e enviar dinheiro para o exterior.</h2>
    </div>

	
</main>



<?php

include ('footer.php');
?>


<script src="public/js/jquery.js"></script>
<script src="public/js/bootstrap.bundle.min.js"></script>

  </body>
</html>