<?php
session_start();
if(!empty($_SESSION['id'])){
  echo "Olá ".$_SESSION['nome'].", Bem vindo <br>";
  echo "<a href='sair.php'>Sair</a>";
}else{
  $_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
  header("Location: login.php");  
}

?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <title>Reserva</title>
    <meta charset="utf-8">
  
   
    
    
  
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="public/js/jquery.mask.min.js"></script>

    <script>
    $(document).ready(function () { 
        
        $("#cpf").mask('000.000.000-00', {reverse: true});
        
        $("#telefone").mask('(99) 99999-9999');
        $("#quantidade").mask("9.990,00",{reverse:true})



    });
    </script>
   

    <style type="text/css">
      div.formulario {border-radius: 20px ;margin:auto; background-color:aqua; height: 500px; width:655px; padding: 20px;}
    </style>

    <link rel="stylesheet" type="text/css" href="style.css">



 </head>
  
  
  
  <body>
    
<?php

include ('header.php');

?>

  
  <div class="container" style="margin-top: 100px;">    
	
  <h1 > <?php echo "Olá, Bem Vindo! ".$_SESSION['nome'];?></h1>
	
	<h2> Faça já sua reserva</h2>
	
	

  <div class="container">  
    

  <form name="dados" class="form-group" action="insertReserva.php" method="POST"  onSubmit="return validar();">
   
  
  <input class="form-control" type="text" name="nome" autocomplete="off" id="nome" value="<?php echo $_SESSION['nome'];?>"><br>
  <input class="form-control cpf-mask" type="text" name="cpf" id="cpf" autocomplete="off" placeholder="CPF">  <br>
  <input class="form-control" type="text" name="email" autocomplete="off" id="email"  value="<?php echo $_SESSION['email'];?>"><br>
  <input class="form-control"type="text" name="telefone" autocomplete="off" id="telefone" placeholder="Celular"
  ><br>
    
  <select class="form-control" id="moeda" name="moeda" >
  
  <option >Selecione a Moeda</option>
  <option value="Dolar">ESTADOS UNIDOS | Dólar Comercial USD</option>
  <option value="Euro">ZONA DO EURO |Euro</option>
  <option value="Libra">REINO UNIDO | Libra GBP</option>
  <option value="Peso">ARGENTINA | Peso ARS</option>
  <option value="Yuan">CHINA | Yuan CNY</option>
  <option value="Iene">JAPÃO | Iene JPY </option>
  <option value="Dirhan">EMIRADOS ÁRABES| Dirhan AED</option>
  <option value="Dolar AUD">AUSTRALIA | Dólar Australiano AUD </option>
  </select> <br>

  <input class="form-control" type="text" name="quantidade" autocomplete="off" id="quantidade" placeholder="quantidade"><br>
  
  <input class="btn btn-dark" type="submit" name="reserva" value="Reservar" >


  
</form>

</div>
</div>

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

if(document.dados.moeda.value=="Selecione a Moeda")
{
alert("Escola a moeda" );
document.dados.moeda.focus();
return false;
}

if(document.dados.quantidade.value==""){
alert( "Preencha a quantidade!" );
document.dados.quantidade.focus();
return false;
}
  
  
return    alert("RESERVA REALIZADA COM SUCESSO REALIZADO COM SUCESSO!");
  
  }



</script>

  
<?php

include ('footer.php');

?>



  </body>
</html>