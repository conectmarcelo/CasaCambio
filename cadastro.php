<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Cadastro</title>
    <meta charset="utf-8">
	
	 
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.mask.min.js"></script>

    <script>
    $(document).ready(function () { 
        
        $("#cpf").mask('000.000.000-00', {reverse: true});
        
        $("#telefone").mask('(99) 99999-9999');
        

    });
    </script>
   



    <style type="text/css">
			div.formulario {border-radius: 20px ;margin:auto; background-color:aqua; height: 500px; width:655px; padding: 20px;}
		</style>

      <link rel="stylesheet" type="text/css" href="style.css">

 </head>
  
  
  
  <body>


    <main class="container">

  	<nav class="navbar navbar-dark bg-dark navbar-expand-lg navbar-default fixed-top">
 
 <a class="navbar-brand" href="index.php"><img src="public/img/logo.png" style="width: 130px; height: 70px; margin-left: 20px ;border-radius: 20px;"></a>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse justify-content-end text-light "  >
    <ul class="navbar-nav ml-md-auto"  >
      
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>

      
      <li class="nav-item dropdown " >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">NOSSOS SERVICOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="moeda.php" style="color : #4B0082;">MOEDA EM ESPÉCIE</a>
        <a class="nav-link" href="transferencia.php" style="color : #4B0082;">TRANSFERÊNCIA INTERNACIONAL</a>
        <a class="nav-link" href="cartao.php" style="color : #4B0082;">CARTÃO PRÉ-PAGO</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="conversor.php">CONVERSOR MOEDAS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="quemSomos.php">QUEM SOMOS</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="contato.php">CONTATO</a>
      </li>
    
    </ul>
    
     </div>

</nav>
  	
  
	
	
  <form class=" form-group" name="dados"  action="insertCadastro.php" method="POST" onSubmit="return validar();" style="height:520px; margin-top: 130px;" >	
	
	
  
  <h2>Preencha todos os dados para solicitação do login e senha</h2>
	
	
	<input class="form-control" type="text" name="nome" autocomplete="off" id="nome" placeholder="Digite Seu Nome Completo"><br>
	<input class="form-control" type="text" name="cpf"  autocomplete="off" id="cpf"  placeholder="Digite Seu CPF"><br>
  <input class="form-control"type="text" name="email" autocomplete="off" id="email"
	placeholder="Digite Seu Email"><br>
	<input class="form-control"type="text" name="telefone" autocomplete="off" id="telefone"
	placeholder="telefone"><br>
	

	<input class="btn btn-dark" type="submit" name="reserva" value="Cadastrar" >

</form>

 <script type="text/javascript">

    function validar(){


if(document.dados.nome.value=="" || 
document.dados.nome.value.length < 8)
{
alert( "Preencha campo NOME corretamente!" );
document.dados.nome.focus();
return false;
}
  
if(document.dados.cpf.value=="" || 
document.dados.cpf.value.length < 11)
{
alert( "Preencha campo cpf corretamente!" );
document.dados.cpf.focus();
return false;
}
  
 
if( document.dados.email.value=="" || 
document.dados.email.value.indexOf('@')==-1 || 
document.dados.email.value.indexOf('.')==-1 )
{
alert( "Preencha campo E-MAIL corretamente!" );
document.dados.email.focus();
return false;
}
  
if (document.dados.telefone.value=="")
{
alert( "Preencha o campo telefone" );
document.dados.telefone.focus();
return false;
}
  
  
return    alert("CADASTRO REALIZADO COM SUCESSO! \nEm breve enviaremos seu login por email");
  
  }



</script>



  </main>


<footer class="pt-5 pb-4" id="contact">
      <div class="container">
        <div class="row" style="margin-top: -30px;margin-bottom: -40px;">
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">SOBRE NÓS</h5>
            
            <ul class="f-address">
              <li>
                <div class="row">
                  <div class="col-1"><i class="fas fa-map-marker"></i></div>
                  <div class="col-10">
                    <h6 class="font-weight-bold mb-0">Endereço:</h6>
                    <p>Avenida Ana Costa 200, Vila Mathias|Santos/SP<br>CEP 11013-020</p>
                  </div>
                </div>
              </li>
            
            
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">TWEETS RECENTES</h5>
            <ul class="f-address">
          
              <li>
                <div class="row">
                  <div class="col-1"><i class="fab fa-twitter"></i></div>
                  <div class="col-10">
                    <p class="mb-0"><h6 class="font-weight-bold mb-0">@GlobalCâmbio</h6>10 Min Atrás</p>
                    
                  </div>
                </div>
              </li>
            
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">ULTIMA ATUALIZAÇÃO</h5>
            <ul class="recent-post">
              <li>
                <label class="mr-3">25<br><span>SET</span></label>
                <h6 class="font-weight-bold mb-0">Cotações atualizadas</h6>
              </li>
        
            </ul>
          </div>
          <div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
            <h5 class="mb-4 font-weight-bold">CONECTE-SE CONOSCO</h5>
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Seu email">
                <span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
            </div>
            <ul class="social-pet mt-4">
              <li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
              <li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
              <li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Copyright -->
    <section class="copyright">
      <div class="container">
        <div class="row">
          <div class="col-md-12 ">
            <div class="text-center text-white">
              &copy; 2019 Global Câmbio. All Rights Reserved.
            </div>
          </div>
        </div>
      </div>
    </section>
     



  
 <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 




</footer>



	
  </body>
</html>