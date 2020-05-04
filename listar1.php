<html>
<head>




    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <script type="text/javascript" src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.bundle.min.js"></script>
    
     <link rel="stylesheet" type="text/css" href="style.css">



<title>Gerenciar Logins</title>

<body>


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
  
      <li class="nav-item dropdown " >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">ACESSO</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="login.php" style="color : #4B0082;">LOGIN</a>
        <a class="nav-link" href="sair.php" style="color : #4B0082;">LOGOUT</a>
                
      </li>

      <li class="nav-item dropdown " >
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">AREA ADMINISTRATIVA</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="nav-link" href="listar.php" style="color : #4B0082;">GERENCIAR RESERVA</a>
        <a class="nav-link" href="listar1.php" style="color : #4B0082;">GERENCIAR LOGIN</a>
        
      </li>




      </ul>
    
     </div>

</nav>





<main style="margin-top: 150px; height: 600px">

<table class='container table table-hover'>

  <h1 class="container" style="padding: 0px; margin-bottom: 20px;">Gerenciamento de Logins<h1>


  <thead>
    <tr>
        <th scope='col'>ID</th>
        <th scope='col'>NOME</th>
        <th scope='col'>EMAIL</th>
        <th scope='col'>USUARIO</th>
         <th scope='col'>SENHA</th>
         <th scope='col'>EXCLUIR</th>
    </tr>
  </thead>


<?php

      
      include('conexao.php');

      $sql = "SELECT id,nome,email,usuario,senha FROM usuarios";

      include('monta_tabela1.php');
      include('fecha.php');

?>

</table>

</main>

<?php
include ('footer.php');
?>




</BODY>
</HTML>




